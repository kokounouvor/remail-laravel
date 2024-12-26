<?php

namespace App\Console\Commands;

use App\Mail\SendmailCampaign;
use App\Models\Campaign;
use App\Models\Email_send_log;
use App\Models\Email_service;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Subscriber;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-campaign-mail-schedule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Cette commande permet d'envoyer les campagnes mails planifiés";

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Récupérer les informations de la campagne
        $campaigns = Campaign::where([["status", "sending"], ["scheduled_at", "<=", now()]])->get();

        // Operer une boucle des campagnes
        foreach ($campaigns as $cmp) {

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

            // Récupérer les informations du serveur mail à utiliser
            $mail_server = Email_service::where("mail_username", $cmp->from_email)->first();

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
                'mail.mailers.smtp.password' => $mail_server->mail_password,
                'mail.mailers.smtp.encryption' => $mail_server->smtp_encryption,
                'mail.from.address' => $mail_server->mail_email,
                'mail.from.name' => $cmp->from_name,
            ]);

            // Récupérer les informations des contacts
            $contacts = $cmp->subscriber_tag === "all" ?
                Subscriber::where([["workspace_id", $cmp->workspace_id], ["user", $cmp->user]])->get() :
                Subscriber::where([["workspace_id", $cmp->workspace_id], ["tag", $cmp->subscriber_tag]])->get();

            // Vérifier les limites d'envoi du serveur mail
            $max_per_hour = $mail_server->max_per_hour;
            $max_per_day = $mail_server->max_per_day;

            //Envoyer les mails en boucle
            foreach ($contacts as $k) {

                // Recalculer les limites avant chaque envoi
                $sent_this_hour = Email_send_log::where('email_service_id', $mail_server->id)
                    ->where('sent_at', '>=', now()->subHour())
                    ->count();

                $sent_today = Email_send_log::where('email_service_id', $mail_server->id)
                    ->whereDate('sent_at', now()->toDateString())
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

                try {
                    //code... Entete de l'email
                    $info = ["subject" => $cmp->subject, "content" => $cmp->contents];

                    //Mail::to($k->recipient_email)->send(new SendmailCampaign($info));

                    // Enregistrer l'envoi dans le log
                    Email_send_log::insert([
                        'email_service_id' => $mail_server->id,
                        'recipient_email' => $k->email,
                        'sent' => true,
                        'sent_at' => now(),
                    ]);

                    Message::insert([
                        "token" => uniqid(),
                        "campaign_id" => $cmp->id,
                        "recipient_email" => $k->email,
                        "subject" => $cmp->subject,
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
                        "campaign_id" => $cmp->id,
                        "recipient_email" => $k->email,
                        "subject" => $cmp->subject,
                        "sent" => false,
                        "created_at" => now(),
                        "updated_at" => null
                    ]);
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
            Campaign::where("id", $cmp->id)->update(["status" => "sent", "updated_at" => now()]);
        }
    }
}
