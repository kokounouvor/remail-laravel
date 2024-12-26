<?php

namespace App\Http\Middleware;

use App\Models\Tag;
use App\Models\Users;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class IsInTag
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Users::where("token", Session::get("user"))->first();
        $tag = Tag::where([["user", Session::get("user"), ["worspace", $user->workspace_id]]])->exists();
        if (!$tag) {
            return redirect()->back()->with("warning", "Pour Ajouter ou importer un contact, vous devez préalablement ajouter un segment. C'est dans un segment qu'un contact peut etre ajouté. Pour ce faire, allez dans 'segmentation' puis cliquer sur nouveau segment");
        }
        return $next($request);
    }
}
