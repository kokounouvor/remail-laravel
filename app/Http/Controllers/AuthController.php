<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //

    public function login()
    {
        $user = [];
        if (Session::has('user_id_particular')) {
            return redirect("https://app.fintou.com/dashboard");
            $user = DB::table('particular_users')->where('user_id', '=', session::get('user_id_particular'))->first();
        }

        if (!empty($_GET["r"])) {
            Session::put("url_last", $_GET["r"]);
        }

        $meta = [
            "title" => "SendGuru - Portail",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.auth.login', compact('user'), $meta);
    }

    public function register()
    {
        if (Session::has('user_id_particular')) {
            return redirect("https://app.fintou.com/dashboard");
            @$user = DB::table('particular_users')->where('user_id', '=', session::get('user_id_particular'))->first();
        }

        if (!empty(@$_GET["r"])) {
            Session::put("url_last", @$_GET["r"]);
        }

        $meta = [
            "title" => "SendGuru - Portail",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.auth.register', $meta);
    }

    public function register_now(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "email" => "required|email:rfc|unique:users",
            "password" => "required|confirmed|min:6"
        ]);

        $acc = substr(str_shuffle("0123456789abcdhtdiomplkjg"), 0, 5);

        // Insertion de l'utilisateur dans la base de donnée
        $ins = Users::insert([
            "name" => $request->nom,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "created_at" => NOW(),
            "token" => $acc
        ]);

        // NOTIFIER L' UTILISATEUR
        if ($ins) {
            //$nw = new notification();
            //$nw->adds("Le Houraaaa de bienvenue", "Félicitation. Nous vous remercions d'avoir opter pour Fintou. Nous ferons de grandes choses ensemble", "account", "register", $acc);
            // envoyer un email pour notifier l'utilisateur
            // $acc = DB::table("particular_users")->where('email', '=', $request->email)->first();
            //$info = ["subject" => "Bienvenue sur Fintou", "email" => $acc->email];
            //return new AuthRegister($info);

            //Mail::to($info["email"])->send(new AuthRegister($info));
            return redirect()->route("auth.login")->with('success', "Inscription réussie. Vous pouvez vous connecter maintenant !");
        } else {
            // Notification que le compte n'existe pas
            return redirect()->back()->with('danger', "erreur");
        }
    }

    public function login_now(Request $request)
    {
        $request->validate([
            "email" => "required|email:rfc",
            "password" => "required"
        ]);

        // Chercher l' email pour vérification
        $ver = DB::table('users')->where('email', '=', $request->email)->count();

        if ($ver > 0) {
            $vers = DB::table('users')->where('email', '=', $request->email)->first();

            // ON vérifie le mot de passe
            if (Hash::check($request->password, $vers->password)) {
                // le mot de passe est correct
                session::put('user', $vers->token);
                return redirect("/dashboard")->with('success', "Authentification réussie");
            } else {
                // le mot de passe est incorrect
                return redirect()->back()->with('danger', "le mot de passe est incorrect");
            }
        } else {
            // Notification que le compte n'existe pas
            return redirect()->back()->with('danger', "le compte n'existe pas");
        }
    }

    public function forget()
    {
        $user = [];
        if (Session::has('user_id_particular')) {
            return redirect("https://app.fintou.com/dashboard");
            $user = DB::table('particular_users')->where('user_id', '=', session::get('user_id_particular'))->first();
        }

        if (!empty($_GET["r"])) {
            Session::put("url_last", $_GET["r"]);
        }

        $meta = [
            "title" => "SendGuru - Portail",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.auth.forget', compact('user'), $meta);
    }

    public function forget_demand(Request $request)
    {
        $request->validate(["email" => "required|exists:users"]);

        Users::where("email", $request->email)->update(["reset_token" => uuid_create()]);
        return redirect()->back()->with("success", "Le lien de réeninitialisation vous a été envoyé par mail");
    }


    public function reset($id)
    {
        $ex = Users::where("reset_token", $id)->exists();

        if (!$ex) {
            return redirect()->route('auth.login')->with("warning", "L'identifiant unique ne correspond a aucun enregistrement");
        }

        $meta = [
            "title" => "SendGuru - Portail",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.auth.reset', $meta);
    }

    public function reset_demand(Request $request)
    {
        $request->validate(["password" => "required", "confirm_password" => "required"]);

        if ($request->password != $request->confirm_password) {
            return redirect()->back()->with("danger", "Les deux mots de passe doivent etre identique");
        }

        Users::where("email", $request->email)->update(["password" => Hash::make($request->password)]);
        return redirect()->route("auth.login")->with("success", "Votre mot de passe à été modifié avec succès");
    }

    public function logout()
    {
        Session::pull("user");
        return redirect(Route('auth.login'))->with('success', " Déconnexion réussie");
    }
}
