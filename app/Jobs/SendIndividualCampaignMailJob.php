<?php

namespace App\Jobs;

use App\Mail\SendmailCampaign;
use App\Models\Campaign;
use App\Models\Email_send_log;
use App\Models\Email_service;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class SendIndividualCampaignMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $campaign;

    /**
     * Create a new job instance.
     */
    public function __construct($campaign)
    {
        //
        $this->campaign = $campaign;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Sauvegarder les configurations SMTP actuelles
        $original_mail_config = [
            'MAIL_MAILER' => env('MAIL_MAILER'),
            'MAIL_HOST' => env('MAIL_HOST'),
            'MAIL_PORT' => env('MAIL_PORT'),
            'MAIL_USERNAME' => env('MAIL_USERNAME'),
            'MAIL_PASSWORD' => env('MAIL_PASSWORD'),
            'MAIL_ENCRYPTION' => env('MAIL_ENCRYPTION'),
            'MAIL_FROM_ADDRESS' => env('MAIL_FROM_ADDRESS'),
            'MAIL_FROM_NAME' => env('MAIL_FROM_NAME'),
        ];

        // Récupérer les informations de la campagne
        $camp_data = Campaign::where([["id", $this->campaign], ["status", "sending"]])->first();

        // Récupérer les informations du serveur mail à utiliser
        $mail_server = Email_service::where("mail_username", $camp_data->from_email)->first();

        // Vérifier si le serveur mail existe
        if (!$mail_server) {
            // Si aucun serveur n'est trouvé, arrêtez l'exécution
            (new Notification())->add("Oooooops", "aucun serveur n'est trouvé, arrêtez l'exécution");
            return;
        }

        // Modifier temporairement les configurations SMTP
        config([
            'mail.mailers.smtp.host' => $mail_server->mail_host,
            'mail.mailers.smtp.port' => $mail_server->mail_port,
            'mail.mailers.smtp.username' => $mail_server->mail_username,
            'mail.mailers.smtp.password' => Crypt::decryptString($mail_server->mail_password),
            'mail.mailers.smtp.encryption' => $mail_server->smtp_encryption,
            'mail.from.address' => $mail_server->mail_email,
            'mail.from.name' => $camp_data->from_name,
            'mail.headers' => [
                'List-Unsubscribe' => '<mailto:gurviolabs@gail.com>',
            ],
            'mail.return_path' => $mail_server->mail_email,
        ]);

        // Récupérer les informations des contacts
        $contacts = $camp_data->subscriber_tag === "all" ?
            Subscriber::where([["workspace_id", $camp_data->workspace_id], ["user", $camp_data->user]])->get() :
            Subscriber::where([["workspace_id", $camp_data->workspace_id], ["tag", $camp_data->subscriber_tag]])->get();

        // Vérifier les limites d'envoi du serveur mail
        $max_per_hour = $mail_server->max_per_hour;
        $max_per_day = $mail_server->max_per_day;
        $max_per_sec = $mail_server->max_per_sec;

        // Compter le nombre de contacts totals
        $total_contacts = $contacts->count();

        // Compter le nombre de contacts déja envoyer
        $sent_contacts = Email_send_log::where('email_service_id', $mail_server->id)
            ->count();

        // Vérifier si le nombre de contacts auxquels les emails ont déjà été envoyés correspond à ce nombre
        if ($sent_contacts >= $total_contacts) {
            // Si tous les contacts ont déjà été envoyés - Mettre à jour le statut de la campagne
            Campaign::where("id", $this->campaign)->update(["status" => "sent", "updated_at" => now()]);
        }

        //Envoyer les mails en boucle
        foreach ($contacts->take(300) as $k) {
            // Recalculer les limites avant chaque envoi
            $sent_this_hour = Email_send_log::where('email_service_id', $mail_server->id)
                ->where('sent_at', '>=', now()->subHour())
                ->count();

            $sent_today = Email_send_log::where('email_service_id', $mail_server->id)
                ->whereDate('sent_at', now()->toDateString())
                ->count();

            $sent_last_5_seconds = Email_send_log::where('email_service_id', $mail_server->id)
                ->where('sent_at', '>=', now()->subSeconds(5))
                ->count();

            // Si les limites sont atteintes, arrêter l'envoi
            if ($sent_this_hour >= $max_per_hour) {
                dd('Les limites en heure sont atteint');
                break;
            }

            if ($sent_today >= $max_per_day) {
                dd("Les limites en jour sont atteint");
                break;
            }

            if ($sent_last_5_seconds >= $max_per_sec) {
                dd("Les limites en 5 secondes sont atteint");
                break;
            }

            try {
                $unikid = uniqid();

                //code... Entete de l'email
                $info = ["subject" => $camp_data->subject, "content" => Storage::disk('public')->get($camp_data->contents), "id" => $unikid];

                Mail::to($k->email)->send(new SendmailCampaign($info));

                // Enregistrer l'envoi dans le log
                Email_send_log::insert([
                    'email_service_id' => $mail_server->id,
                    'recipient_email' => $k->email,
                    'sent' => true,
                    'sent_at' => now(),
                ]);

                Message::insert([
                    "token" => $unikid,
                    "campaign_id" => $camp_data->id,
                    "recipient_email" => $k->email,
                    "subject" => $camp_data->subject,
                    "sent" => true,
                    "created_at" => now(),
                    "updated_at" => null
                ]);
            } catch (\Throwable $th) {
                // Enregistrer l'échec dans le log
                Email_send_log::insert([
                    'email_service_id' => $mail_server->id,
                    'recipient_email' => $k->email,
                    'sent' => false,
                    'sent_at' => now(),
                ]);

                //throw $th;
                Message::insert([
                    "token" => uniqid(),
                    "campaign_id" => $camp_data->id,
                    "recipient_email" => $k->email,
                    "subject" => $camp_data->subject,
                    "sent" => false,
                    "created_at" => now(),
                    "updated_at" => null
                ]);
                Log::error("Error send email to : " . $k->email);
            }
        }

        // Rétablir les configurations SMTP d'origine
        config([
            'mail.mailers.smtp.host' => $original_mail_config['MAIL_HOST'],
            'mail.mailers.smtp.port' => $original_mail_config['MAIL_PORT'],
            'mail.mailers.smtp.username' => $original_mail_config['MAIL_USERNAME'],
            'mail.mailers.smtp.password' => $original_mail_config['MAIL_PASSWORD'],
            'mail.mailers.smtp.encryption' => $original_mail_config['MAIL_ENCRYPTION'],
            'mail.from.address' => $original_mail_config['MAIL_FROM_ADDRESS'],
            'mail.from.name' => $original_mail_config['MAIL_FROM_NAME'],
        ]);

        // Mettre à jour le statut de la campagne
        Campaign::where("id", $this->campaign)->update(["status" => "sent", "updated_at" => now()]);
    }
}
