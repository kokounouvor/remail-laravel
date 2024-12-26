<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Email_service;
use App\Models\Notification;
use App\Models\Subscriber;
use App\Models\Tag;
use App\Models\Users;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class EmailServiceController extends Controller
{
    //
    public function emailServices()
    {
        $user = Users::where('token', Session::get("user"))->first();
        $group = Tag::where('user', Session::get("user"))->get();

        //$contacts = Subscriber::where('user', Session::get("user"))->get();
        $contacts = Subscriber::get();
        $campaigns = Campaign::where('user', Session::get("user"))->get();
        $services = Email_service::where('user', Session::get("user"))->get();

        $swipers = Workspace::where("user", Session::get('user'))->get();
        $notifications = Notification::where("user", Session::get('user'))->limit(5)->get();
        $notifications_unread = Notification::where([['user', Session::get("user")], ["status", null]])->count();

        $meta = [
            "title" => "SendGuru - Portail",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.email_services', compact('user', 'group', 'contacts', 'campaigns', 'services', 'swipers', 'notifications', 'notifications_unread'), $meta);
    }

    public function emailServices_add(Request $request)
    {
        $request->validate([
            "name" => "required",
            "host" => "required",
            "email" => "required",
            "username" => "required",
            "password" => "required",
            "encryption" => "required",
            "max_per_hour" => "required",
            "max_per_day" => "required",
            "port" => "required"
        ]);

        // Insertion de l'utilisateur dans la base de donnée
        $ins = Email_service::insert([
            "name" => $request->name,
            "mail_email" => $request->email,
            "mail_mailer" => $request->mailer,
            "mail_host" => $request->host,
            "mail_port" => $request->port,
            "mail_username" => $request->username,
            "mail_password" => Crypt::encryptString($request->password),
            "mail_encryption" => $request->encryption,
            "max_per_hour" => $request->max_per_hour,
            "max_per_day" => $request->max_per_day,
            "user" => Session::get("user"),
            "created_at" => NOW()
        ]);

        // NOTIFIER L' UTILISATEUR
        if ($ins) {
            return redirect()->back()->with('success', "Service mail ajouté !");
        } else {
            // Notification que le compte n'existe pas
            return redirect()->back()->with('danger', "erreur");
        }
    }

    public function emailServices_edit(Request $request)
    {
        $request->validate([
            "name" => "required",
            "host" => "required",
            "username" => "required",
            "email" => "required",
            "password" => "required",
            "encryption" => "required",
            "port" => "required",
            "max_per_hour" => "required",
            "max_per_day" => "required",
            "id" => "required",
        ]);

        // Insertion de l'utilisateur dans la base de donnée
        $ins = Email_service::where("id", $request->id)->update([
            "name" => htmlspecialchars($request->name),
            "mail_email" => $request->email,
            "mail_mailer" => $request->mailer,
            "mail_host" => $request->host,
            "mail_port" => $request->port,
            "mail_username" => $request->username,
            "mail_password" => Crypt::encryptString($request->password),
            "mail_encryption" => $request->encryption,
            "max_per_hour" => $request->max_per_hour,
            "max_per_day" => $request->max_per_day,
            "updated_at" => NOW()
        ]);

        // NOTIFIER L' UTILISATEUR
        if ($ins) {
            return redirect()->back()->with('success', "Service mail modifié !");
        } else {
            // Notification que le compte n'existe pas
            return redirect()->back()->with('danger', "erreur");
        }
    }

    public function emailServices_delete(Request $request)
    {
        $request->validate([
            "id" => "required"
        ]);

        // Insertion de l'utilisateur dans la base de donnée
        $ins = Email_service::where("id", $request->id)->delete();

        // NOTIFIER L' UTILISATEUR
        if ($ins) {
            return redirect()->back()->with('success', "Service mail supprimé !");
        } else {
            // Notification que le compte n'existe pas
            return redirect()->back()->with('danger', "erreur");
        }
    }
}
