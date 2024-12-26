<?php

namespace App\Http\Controllers;

use App\Jobs\ImportContactsJob;
use App\Jobs\TestJob;
use App\Models\Campaign;
use App\Models\Email_service;
use App\Models\Message;
use App\Models\Notification;
use App\Models\pages_view;
use App\Models\Subscriber;
use App\Models\Users;
use App\Models\Workspace;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PortalController extends Controller
{

    //

    public function dashboard()
    {
        $user = DB::table('users')->where('token', Session::get("user"))->first();

        $campaigns = DB::table('campaigns')->where([['user', Session::get("user")], ["status", "=", "sent"]])->count();
        //$sent = DB::table('messages')->where([['user', Session::get("user")], ["sent", "!=", null]])->count();
        //$attente = DB::table('messages')->where([['user', Session::get("user")], ["sent", "=", null]])->count();
        $subscribers = DB::table('subscribers')->where('user', Session::get("user"))->count();

        $swipers = Workspace::where("user", Session::get('user'))->get();
        $notifications = Notification::where("user", Session::get('user'))->limit(5)->get();
        $notifications_unread = Notification::where([['user', Session::get("user")], ["status", null]])->count();


        /**
         * Démarrage des statique
         */
        // Définir les périodes
        $periods = [
            'this_week' => Carbon::now()->startOfWeek(),
            'last_month' => Carbon::now()->subMonth(),
            'last_year' => Carbon::now()->subYear(),
        ];

        // Initialiser un tableau pour stocker les résultats
        $statistics = [];

        foreach ($periods as $key => $startDate) {
            $endDate = Carbon::now();

            // Récupérer les contacts
            $totalContacts = Subscriber::where('created_at', '>=', $startDate)
                ->where('created_at', '<=', $endDate)
                ->count();

            // Récupérer les messages envoyés (réussis)
            $sentMessages = Message::where('sent', true)
                ->where('created_at', '>=', $startDate)
                ->where('created_at', '<=', $endDate)
                ->count();

            // Récupérer les messages bouncés
            $bouncedMessages = Message::where('sent', false)
                ->where('created_at', '>=', $startDate)
                ->where('created_at', '<=', $endDate)
                ->count();

            // Ajouter les résultats à notre tableau
            $statistics[$key] = [
                'total_contacts' => $totalContacts,
                'sent_messages' => $sentMessages,
                'bounced_messages' => $bouncedMessages
            ];
        }

        // Récupérer les données pour les graphiques
        $importGraphData = $this->getImportGraphData($periods);
        $sendGraphData = $this->getSendGraphData($periods);

        //dd(Session::get('user'));
        $meta = [
            "title" => "SendGuru - Portail",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.dashboard', compact('user', 'campaigns', 'subscribers', 'swipers', 'notifications', 'notifications_unread', 'statistics', 'importGraphData', 'sendGraphData'), $meta);
    }

    public function setting()
    {
        $user = DB::table('users')->where('token', Session::get("user"))->first();

        $campaigns = DB::table('campaigns')->where([['user', Session::get("user")], ["status", "=", "sent"]])->count();
        //$sent = DB::table('messages')->where([['user', Session::get("user")], ["sent", "!=", null]])->count();
        //$attente = DB::table('messages')->where([['user', Session::get("user")], ["sent", "=", null]])->count();
        $subscribers = DB::table('subscribers')->where('user', Session::get("user"))->count();

        $swipers = Workspace::where("user", Session::get('user'))->get();
        $notifications = Notification::where("user", Session::get('user'))->limit(5)->get();
        $notifications_unread = Notification::where([['user', Session::get("user")], ["status", null]])->count();

        //dd(Session::get('user'));
        $meta = [
            "title" => "SendGuru - Portail",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.setting', compact('user', 'campaigns', 'subscribers', 'swipers', 'notifications', 'notifications_unread'), $meta);
    }

    public function setting_password_change(Request $request)
    {
        $request->validate([
            "old_password" => "required",
            "new_password" => "required"
        ]);

        $user = Users::where("token", Session::get("user"))->first();

        if (Hash::check($request->old_password, $user->password)) {
            Users::where("token", Session::get("user"))->update([
                "password" => Hash::make($request->new_password),
                "updated_at" => now()
            ]);
            return redirect()->back()->with("success", "Votre mot de passe a bien été modifié");
        }
        return redirect()->back()->with("danger", "Votre mot de passe actuel est incorrect");
    }

    public function setting_personal_data(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required"
        ]);

        $user = Users::where("token", Session::get("user"))->first();

        if ($user) {
            Users::where("token", Session::get("user"))->update([
                "name" => $request->name,
                "email" => $request->email,
                "company" => $request->company,
                "updated_at" => now()
            ]);
            return redirect()->back()->with("success", "Vos informations personnelles ont été mise à jour");
        }
        return redirect()->back()->with("danger", "Un probleme inattendue est survenue");
    }

    public function notifications()
    {
        $user = DB::table('users')->where('token', Session::get("user"))->first();
        $group = DB::table('tags')->where('user', Session::get("user"))->get();

        Notification::where([['user', Session::get("user")], ["status", null]])->update(["status" => true, "updated_at" => now()]);

        //$contacts = DB::table('subscribers')->where('user', Session::get("user"))->get();
        $contacts = DB::table('subscribers')->get();
        $workspaces = DB::table('workspaces')->where('user', Session::get("user"))->get();

        $swipers = Workspace::where("user", Session::get('user'))->get();
        $notifications = Notification::where("user", Session::get('user'))->limit(5)->get();
        $notifications_unread = Notification::where([['user', Session::get("user")], ["status", null]])->count();

        $meta = [
            "title" => "SendGuru - Portail",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.notifications', compact('user', 'group', 'contacts', 'workspaces', 'swipers', 'notifications', 'notifications_unread'), $meta);
    }

    // Extrait de la méthode pour récupérer les données graphiques dans le contrôleur
    public function getImportGraphData($periods)
    {
        $importData = [];
        foreach ($periods as $key => $startDate) {
            $endDate = Carbon::now();

            // Exemple de récupération des données
            $count = Subscriber::where('created_at', '>=', $startDate)
                ->where('created_at', '<=', $endDate)
                ->count();

            // On ajoute les données au tableau
            $importData[] = [
                'label' => $key,  // Exemple : 'Cette semaine', 'Il y a 1 mois', etc.
                'count' => $count
            ];
        }

        return $importData;
    }

    public function getSendGraphData($periods)
    {
        $sendData = [];
        foreach ($periods as $key => $startDate) {
            $endDate = Carbon::now();

            // Exemple de récupération des données
            $count = Message::where('sent', true)
                ->where('created_at', '>=', $startDate)
                ->where('created_at', '<=', $endDate)
                ->count();

            // On ajoute les données au tableau
            $sendData[] = [
                'label' => $key,  // Exemple : 'Cette semaine', 'Il y a 1 mois', etc.
                'count' => $count
            ];
        }

        return $sendData;
    }
}
