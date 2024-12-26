<?php

namespace App\Http\Middleware;

use App\Models\Workspace;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class IsInWorkspace
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $workspace = Workspace::where("user", Session::get("user"))->exists();
        if (!$workspace) {
            return redirect()->route("workspace")->with("warning", "Pour ajouter une campagne ou faire une opération, vous devrez crée un espace de travail dans lequel opérer. Cliquer sur le boutton Ajouter un workspace");
        }
        return $next($request);
    }
}
