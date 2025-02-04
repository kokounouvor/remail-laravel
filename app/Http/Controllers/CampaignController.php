<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Campaign_link_click;
use App\Models\Email_service;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Subscriber;
use App\Models\Tag;
use App\Models\Template;
use App\Models\Users;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CampaignController extends Controller
{
    //
    public function campaigns()
    {
        $user = Users::where('token', Session::get("user"))->first();
        $group = Tag::where('user', Session::get("user"))->get();

        //$contacts = Subscriber::where('user', Session::get("user"))->get();
        $contacts = Subscriber::get();
        $campaigns = Campaign::where('user', Session::get("user"))->get();

        $swipers = Workspace::where("user", Session::get('user'))->get();
        $notifications = Notification::where("user", Session::get('user'))->limit(5)->get();
        $notifications_unread = Notification::where([['user', Session::get("user")], ["status", null]])->count();

        $meta = [
            "title" => "REMAIL - Portal",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.campaigns', compact('user', 'group', 'contacts', 'campaigns', 'swipers', 'notifications', 'notifications_unread'), $meta);
    }

    public function campaignNew()
    {
        $user = Users::where('token', Session::get("user"))->first();
        $group = Tag::where('user', Session::get("user"))->get();
        $templ = Template::where('user', Session::get("user"))->get();

        //$contacts = Subscriber::where('user', Session::get("user"))->get();
        $contacts = Subscriber::get();
        $emails = Email_service::where('user', Session::get("user"))->get();

        $swipers = Workspace::where("user", Session::get('user'))->get();
        $notifications = Notification::where("user", Session::get('user'))->limit(5)->get();
        $notifications_unread = Notification::where([['user', Session::get("user")], ["status", null]])->count();

        $meta = [
            "title" => "REMAIL - Portal",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.campaign-new', compact('user', 'group', 'contacts', 'templ', 'swipers', 'emails', 'notifications', 'notifications_unread'), $meta);
    }

    public function campaignNewAdd(Request $request)
    {
        $request->validate([
            "name" => "required",
            "subject" => "required",
            "from_name" => "required",
            "from_email" => "required",
            "mail_body" => "required"
        ]);

        $uid = uuid_create();
        $user_data = Users::where("token", Session::get("user"))->first();

        // Ajouter le suivi des liens dans l'email
        $contents = (new Campaign_link_click())->addTrackingToLinks($request->mail_body, $uid);

        $filepath = "campaigns/" . uniqid() . ".html";
        Storage::disk("public")->put($filepath, $contents);

        // Insertion de l'utilisateur dans la base de donnée
        $ins = Campaign::insert([
            "workspace_id" => $user_data->workspace_id,
            "uuid" => $uid,
            "user" => Session::get("user"),
            "name" => htmlspecialchars($request->name),
            "subject" => htmlspecialchars($request->subject),
            "from_name" => htmlspecialchars($request->from_name),
            "from_email" => htmlspecialchars($request->from_email),
            "contents" => $filepath,
            "status" => "draft",
            "created_at" => NOW(),
            "updated_at" => null
        ]);

        // NOTIFIER L' UTILISATEUR
        if ($ins) {
            return redirect(Route('campaign-finalize', $uid))->with('success', "Groupe ajouté !");
        } else {
            // Notification que le compte n'existe pas
            return redirect()->back()->with('danger', "erreur");
        }
    }

    public function campaignEnd($uid)
    {
        $user = Users::where('token', Session::get("user"))->first();
        $group = Tag::where('user', Session::get("user"))->get();

        //$contacts = Subscriber::where('user', Session::get("user"))->get();
        $contacts = Subscriber::where('user', Session::get("user"))->get();
        $camp = Campaign::where([["uuid", "=", $uid], ['user', Session::get("user")]])->first();
        $contacts_group = Subscriber::where('user', Session::get("user"))->distinct()->get(["tag"]);

        $swipers = Workspace::where("user", Session::get('user'))->get();
        $notifications = Notification::where("user", Session::get('user'))->limit(5)->get();
        $notifications_unread = Notification::where([['user', Session::get("user")], ["status", null]])->count();

        $meta = [
            "title" => "REMAIL - Portal",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.campaign-end', compact('user', 'group', 'contacts', 'camp', 'contacts_group', 'swipers', 'notifications', 'notifications_unread'), $meta);
    }

    public function campaign_delete(Request $request)
    {
        $request->validate([
            "id" => "required"
        ]);

        // Insertion de l'utilisateur dans la base de donnée
        $ins = Campaign::where("id", "=", $request->id)->delete();

        // NOTIFIER L' UTILISATEUR
        if ($ins) {
            return redirect()->back()->with('success', "Campagne supprimé !");
        } else {
            // Notification que le compte n'existe pas
            return redirect()->back()->with('danger', "erreur");
        }
    }

    public function campaignDetails($uid)
    {
        $user = Users::where('token', Session::get("user"))->first();

        $camps = Campaign::where([["uuid", "=", $uid], ['user', Session::get("user")]])->first();
        //$receivers = Message::where([["campaign_id", "=", $camps->id], ['user', Session::get("user")]])->paginate(50);
        $receivers = Message::where('campaign_id', $camps->id)->paginate(10);

        //dd($receivers);

        $swipers = Workspace::where("user", Session::get('user'))->get();
        $notifications = Notification::where("user", Session::get('user'))->limit(5)->get();
        $notifications_unread = Notification::where([['user', Session::get("user")], ["status", null]])->count();

        // Les statistique de la campagne
        $mail_contact = $camps->subscriber_tag === "all" ?
            Subscriber::where([['user', $user->token], ['workspace_id', $user->workspace_id]])->count() :
            Subscriber::where([['user', $user->token], ['workspace_id', $user->workspace_id], ['tag', $camps->subscriber_tag]])->count();

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
            "title" => "REMAIL - Portal",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.campaign-details', compact('user', 'camps', 'receivers', 'swipers', 'notifications', 'notifications_unread', 'mail_contact', 'mail_sent', 'mail_bounced', 'mail_attente', 'mail_clicks_links', 'mail_clicks'), $meta);
    }
}
