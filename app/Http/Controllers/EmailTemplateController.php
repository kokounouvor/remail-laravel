<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Subscriber;
use App\Models\Tag;
use App\Models\Template;
use App\Models\Users;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class EmailTemplateController extends Controller
{
    //
    public function index()
    {
        $user = Users::where('token', Session::get('user'))->first();
        $group = Tag::where('user', Session::get('user'))->get();
        $templ = Template::where('user', Session::get('user'))->paginate(6);

        $contacts = Subscriber::where('user', Session::get('user'))->get();
        $workspaces = Workspace::where('user', Session::get('user'))->get();
        $swipers = Workspace::where("user", Session::get('user'))->get();
        $notifications = Notification::where("user", Session::get('user'))->limit(5)->get();
        $notifications_unread = Notification::where([['user', Session::get("user")], ["status", null]])->count();

        $meta = [
            "title" => "REMAIL - Portal",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.template.index', compact('user', 'group', 'contacts', 'workspaces', 'templ', 'swipers', 'notifications', 'notifications_unread'), $meta);
    }

    public function publisher()
    {
        $user = Users::where('token', Session::get('user'))->first();
        $workspaces = Workspace::where('user', Session::get('user'))->get();
        $notifications = Notification::where("user", Session::get('user'))->limit(5)->get();
        $notifications_unread = Notification::where([['user', Session::get("user")], ["status", null]])->count();
        $swipers = Workspace::where("user", Session::get('user'))->get();

        $meta = [
            "title" => "REMAIL - Portal",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        return view('portal.template.publisher', compact('user', 'swipers', 'workspaces', 'notifications', 'notifications_unread'), $meta);
    }

    public function editor($id)
    {
        $user = Users::where('token', Session::get('user'))->first();
        $workspaces = Workspace::where('user', Session::get('user'))->get();
        $notifications = Notification::where("user", Session::get('user'))->limit(5)->get();
        $notifications_unread = Notification::where([['user', Session::get("user")], ["status", null]])->count();
        $swipers = Workspace::where("user", Session::get('user'))->get();

        $meta = [
            "title" => "REMAIL - Portal",
            "description" => "Solution d'envoi de mail de masse",
            'thumb' => ""
        ];

        // Récuperer les informations
        $templ = Template::where("id", $id)->first();

        return view('portal.template.editor', compact('user', 'swipers', 'workspaces', 'templ',  'notifications', 'notifications_unread'), $meta);
    }

    public function store(Request $request)
    {
        $user = Users::where('token', Session::get('user'))->first();

        $request->validate([
            "name" => "required",
            "content_type" => "required"
        ]);

        if ($request->content_type == "texte") {
            $request->validate([
                "content" => "required",
            ]);
        } else {
            $request->validate([
                "code_content" => "required",
            ]);
        }

        $cnt = $request->content_type == "texte" ? $request->content : $request->code_content;
        $filepath = "templates/" . uniqid() . ".html";

        Storage::disk("public")->put($filepath, $cnt);

        // Insertion de l'utilisateur dans la base de donnée
        Template::insert([
            "uuid" => uuid_create(),
            "workspace_id" => $user->workspace_id,
            "name" => htmlspecialchars($request->name),
            "content" => $filepath,
            "content_type" => $request->content_type,
            "user" => Session::get("user"),
            "created_at" => NOW()
        ]);

        return response()->json(["status" => "ok"]);
    }

    public function updater(Request $request)
    {
        $request->validate([
            "name" => "required",
            "id" => "required",
            "content" => "required"
        ]);

        // Récuperer les informations
        $data = Template::where("id", $request->id)->first();
        $filepath = $data->content;

        Storage::disk("public")->put($filepath, $request->content);

        // Insertion de l'utilisateur dans la base de donnée
        Template::where("id", $request->id)->update([
            "name" => htmlspecialchars($request->name),
            "updated_at" => NOW()
        ]);

        return response()->json(["status" => "ok"]);
    }

    public function remove(Request $request)
    {
        $request->validate([
            "id" => "required"
        ]);

        // Insertion de l'utilisateur dans la base de donnée
        $ins = Template::where("id", $request->id)->delete();

        // NOTIFIER L' UTILISATEUR
        if ($ins) {
            return redirect()->back()->with('success', "Template supprimé !");
        } else {
            // Notification que le compte n'existe pas
            return redirect()->back()->with('danger', "erreur");
        }
    }
}
