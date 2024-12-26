<?php

namespace App\Http\Controllers;

use App\Jobs\ContactsImportJob;
use App\Jobs\ImportContactsJob;
use App\Jobs\ImportsSubscriberJob;
use App\Models\Import;
use App\Models\Notification;
use App\Models\Payment;
use App\Models\Subscriber;
use App\Models\Tag;
use App\Models\Users;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SubscriberController extends Controller
{
    //
    public function index()
    {
        $user = Users::where('token', Session::get('user'))->first();
        $group = Tag::where([['user', Session::get('user')], ['workspace_id', $user->workspace_id]])->get();

        //$contacts = DB::table('subscribers')->where('user', '=', Session::get('user'))->get();
        $queue = Import::where([['user', Session::get('user')], ['workspace_id', $user->workspace_id]])->get();
        $queue_waiting = Import::where([['user', Session::get('user')], ['workspace_id', $user->workspace_id], ["status", "in progress"]])->count();
        $contacts = Subscriber::where([['user', Session::get('user')], ['workspace_id', $user->workspace_id]])->paginate(15);
        $all_contacts = Subscriber::where([['user', Session::get('user')], ['workspace_id', $user->workspace_id]])->count();
        $workspaces = Workspace::where('user', Session::get('user'))->get();
        $swipers = Workspace::where("user", Session::get('user'))->get();
        $notifications = Notification::where("user", Session::get('user'))->limit(5)->get();
        $notifications_unread = Notification::where([['user', Session::get("user")], ["status", null]])->count();

        $meta = [
            "title" => "REMAIL - Portal",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.subscribers', compact('user', 'group', 'contacts', 'all_contacts', 'swipers', 'notifications', 'queue', 'notifications_unread', 'queue_waiting'), $meta);
    }

    public function group_add(Request $request)
    {
        $request->validate([
            "name" => "required"
        ]);

        $user = Users::where('token', Session::get('user'))->first();

        // Insertion de l'utilisateur dans la base de donnée
        $ins = Tag::insert([
            "workspace_id" => $user->workspace_id,
            "name" => htmlspecialchars($request->name),
            "user" => Session::get("user"),
            "created_at" => NOW(),
            "updated_at" => null
        ]);

        // NOTIFIER L' UTILISATEUR
        if ($ins) {
            return redirect()->back()->with('success', "Nouveau segment ajouté!");
        } else {
            // Notification que le compte n'existe pas
            return redirect()->back()->with('danger', "Un probleme inattendue est survenue");
        }
    }

    public function group_delete(Request $request)
    {
        $request->validate([
            "id" => "required"
        ]);

        // Insertion de l'utilisateur dans la base de donnée
        $tg = Subscriber::where("tag", $request->id)->first();
        $ins = Tag::where("id", $request->id)->delete();

        // NOTIFIER L' UTILISATEUR
        if ($ins) {
            return redirect()->back()->with('success', "Segment supprimé avec succès!");
        } else {
            // Notification que le compte n'existe pas
            return redirect()->back()->with('danger', "Un probleme inattendue est survenue");
        }
    }

    public function import(Request $request)
    {
        $request->validate([
            'file_contact' => 'required|file|mimes:csv,txt|max:10240',
            'tag' => 'required'
        ]);

        // Enregistrer temporairement le fichier pour le traitement
        $filePath = $request->file('file_contact')->storeAs('csv_files', 'file_' . time() . '.csv', 'public');

        ImportContactsJob::dispatch($filePath, $request->tag, Session::get("user"))->onQueue('import_contacts');

        return redirect()->back()->with('success', 'Importation en cours. Vous serez notifié à la fin.');
    }

    public function add_contact(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'tag' => 'required'
        ]);
        $user = Users::where('token', Session::get('user'))->first();

        Subscriber::insert([
            "workspace_id" => $user->workspace_id,
            "first_name" => $request->nom,
            "last_name" => $request->prenom,
            "email" => $request->email,
            "tag" => $request->tag,
            "user" => Session::get("user"),
            "created_at" => now(),
            "updated_at" => now()
        ]);

        return redirect(Route('subscribers'))->with('success', 'Contacts importés avec succès.');
    }

    public function delete_contact(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        Subscriber::where("id", $request->id)->delete();

        return redirect()->back()->with('success', 'Contacts supprimé avec succès.');
    }
}
