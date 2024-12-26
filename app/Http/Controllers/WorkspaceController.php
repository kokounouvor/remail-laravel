<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Subscriber;
use App\Models\Tag;
use App\Models\Users;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WorkspaceController extends Controller
{
    //
    public function workspace()
    {
        $user = Users::where('token', Session::get("user"))->first();
        $group = Tag::where('user', Session::get("user"))->get();

        //$contacts = Subscriber::where('user', Session::get("user"))->get();
        $contacts = Subscriber::get();
        $workspaces = Workspace::where('user', Session::get("user"))->get();

        $swipers = Workspace::where("user", Session::get('user'))->get();
        $notifications = Notification::where("user", Session::get('user'))->limit(5)->get();
        $notifications_unread = Notification::where([['user', Session::get("user")], ["status", null]])->count();

        $meta = [
            "title" => "SendGuru - Portail",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.workspace', compact('user', 'group', 'contacts', 'workspaces', 'swipers', 'notifications', 'notifications_unread'), $meta);
    }

    public function workspace_add(Request $request)
    {
        $request->validate([
            "name" => "required"
        ]);

        $acc = substr(str_shuffle("0123456789abcdhtdiomplkjg"), 0, 5);

        $workspaces = Workspace::where("user", Session::get('user'))->count();

        // Insertion de l'utilisateur dans la base de donnée
        $ins = Workspace::insertGetId([
            "name" => htmlspecialchars($request->name),
            "user" => Session::get("user"),
            "created_at" => NOW()
        ]);

        if ($workspaces == 0 || $workspaces == null) {
            Users::where("token", Session::get('user'))->update([
                "workspace_id" => $ins
            ]);
        }

        // NOTIFIER L' UTILISATEUR
        if ($ins) {
            return redirect()->back()->with('success', "Workspace ajouté !");
        } else {
            // Notification que le compte n'existe pas
            return redirect()->back()->with('danger', "erreur");
        }
    }

    public function workspace_edit(Request $request)
    {
        $request->validate([
            "name" => "required",
            "id" => "required",
        ]);

        $acc = substr(str_shuffle("0123456789abcdhtdiomplkjg"), 0, 5);

        // Insertion de l'utilisateur dans la base de donnée
        $ins = Workspace::where("id", "=", $request->id)->update([
            "name" => htmlspecialchars($request->name),
            "updated_at" => NOW()
        ]);

        // NOTIFIER L' UTILISATEUR
        if ($ins) {
            return redirect()->back()->with('success', "Workspace modifié !");
        } else {
            // Notification que le compte n'existe pas
            return redirect()->back()->with('danger', "erreur");
        }
    }

    public function workspace_delete(Request $request)
    {
        $request->validate([
            "id" => "required"
        ]);

        // Insertion de l'utilisateur dans la base de donnée
        $ins = Workspace::where("id", "=", $request->id)->delete();

        // NOTIFIER L' UTILISATEUR
        if ($ins) {
            return redirect()->back()->with('success', "Workspace supprimé !");
        } else {
            // Notification que le compte n'existe pas
            return redirect()->back()->with('danger', "erreur");
        }
    }

    public function workspace_swipe(Request $request)
    {
        $request->validate(["id" => "required|exists:workspaces"]);
        $swipe = Users::where("token", Session::get('user'))->update([
            "workspace_id" => $request->id
        ]);
        return redirect()->back()->with('success', "Basculement réussie !");
    }
}
