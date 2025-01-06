<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Campaign_link_click;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Subscriber;
use App\Models\Newsletter;
use App\Models\Users;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
{
    //
    public function welcome()
    {
        $meta = [
            "title" => "SendGuru - Portail",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('landing.welcome', $meta); 
    }

    public function campaign_details($uid)
    {

        $camps = Campaign::where("uuid", "=", $uid)->first();
        //$receivers = Message::where([["campaign_id", "=", $camps->id], ['user', Session::get("user")]])->paginate(50);
        $receivers = Message::where('campaign_id', $camps->id)->paginate(10);

        // Les statistique de la campagne
        $mail_contact = $camps->subscriber_tag === "all" ?
            Subscriber::where([['user', $camps->user], ['workspace_id', $camps->workspace_id]])->count() :
            Subscriber::where([['user', $camps->user], ['workspace_id', $camps->workspace_id], ['tag', $camps->subscriber_tag]])->count();

        // Mails Envoyé avec succès
        $mail_sent = Message::where([['campaign_id', $camps->id], ['sent', true]])->count();
        // Mails Bounce
        $mail_bounced = Message::where([['campaign_id', $camps->id], ['sent', false]])->count();
        //Contact en attente d'envoie
        $mail_attente = $mail_contact - ($mail_bounced + $mail_sent);

        // Les liens cliqués sur 
        $mail_clicks_links = Campaign_link_click::where("campaign_id", $camps->id)->distinct()->get(["url"]);
        $mail_clicks = Campaign_link_click::where("campaign_id", $camps->id)->count();

        $meta = [
            "title" => "SendGuru - Portail",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('landing.campaign', compact('camps', 'receivers','mail_contact', 'mail_sent', 'mail_bounced', 'mail_attente', 'mail_clicks_links', 'mail_clicks'), $meta);
    }

    public function docs()
    {
        $meta = [
            "title" => "SendGuru - Portail",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('landing.docs', $meta); 
    }

    public function newsletter(Request $request){
        $request->validate(["email"=>"required|unique:newsletters"]);
        Newsletter::insert(["email"=>$request->email, "created_at"=>now()]);
        return redirect("/#newsletter")->with("success","Inscription réussie !");
    }

}
