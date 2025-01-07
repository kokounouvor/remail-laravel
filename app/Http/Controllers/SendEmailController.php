<?php

namespace App\Http\Controllers;

use App\Jobs\SendCampaignMailJob;
use App\Jobs\SendIndividualCampaignMailJob;
use App\Mail\SendmailCampaignTEST;
use App\Models\Campaign;
use App\Models\Campaign_link_click;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    //
    public function campaignMailTest(Request $request)
    {
        $request->validate([
            "email" => "required",
            "campaign" => "required"
        ]);

        $campaig = Campaign::where("id", "=", $request->campaign)->first();

        // envoie du code otp 
        $info = ["subject" => "TEST -" . $campaig->subject, "content" => $campaig->contents, "id" => $campaig->id];

        Mail::to($request->email)->send(new SendmailCampaignTEST($info));
        //return (new SendmailCampaignTEST($info));
        // envoie
        return redirect()->back()->with('success', "Email test envoyé à " . $request->email);
    }

    public function campaignMail(Request $request)
    {
        $request->validate([
            "receivers" => "required",
            "type_send" => "required",
            "campaign" => "required"
        ]);

        $request->receivers === "all" ? $data["subscriber_tag"] = "all" : $data["subscriber_tag"] = $request->receivers;

        // mettre à jour la campagne
        if (!empty($request->start_date) && !empty($request->start_time)) {
            $data["scheduled_at"] = $request->start_date . " " . $request->start_time;
            $data["status"] = "sending";
            $data["updated_at"] = now();
            Campaign::where("id", $request->campaign)->update($data);
        } else {
            $data["scheduled_at"] = null;
            $data["status"] = "sending";
            $data["updated_at"] = now();
            Campaign::where("id", $request->campaign)->update($data);

            // Démarrer l'envoie et la placer dans la file d'attente (queue job)
            SendIndividualCampaignMailJob::dispatch($request->campaign)->onQueue("direct_campaign");
        }

        return redirect(Route("campaigns"))->with('success', "Envoi de campagne enregistré");
    }

    public function trackOpen($id)
    {
        (new Notification())->add("Track Email start", "Démarrage du track");

        // Trouver l'email correspondant par ID (utilisez first() pour obtenir l'email)
        $email = Message::where("token", $id)->first();

        if ($email) {
            $email->update([
                "open" => true,
                "open_at" => now()  // Met à jour 'open_at' avec l'heure actuelle
            ]);
        }

        // Retourner une réponse d'image transparente de 1x1 pour que l'email soit suivi
        return response()->file(public_path('images/pixel.png'), [
            'Content-Type' => 'image/png',
        ]);
    }

    public function trackClick($campaign_id, $url)
    {
        // Décoder l'URL
        $decodedUrl = base64_decode($url);

        // Recuperer les informations de la campagne
        $campaign = Campaign::where("uuid", $campaign_id)->first();

        // Enregistrer l'information sur le clic dans la base de données
        Campaign_link_click::insert([
            'campaign_id' => $campaign->id,
            'url' => $decodedUrl,
            'created_at' => now(),
        ]);

        // Rediriger l'utilisateur vers l'URL d'origine
        return redirect()->to($decodedUrl);
    }
}
