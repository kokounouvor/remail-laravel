<?php

namespace App\Http\Middleware;

use App\Models\Users;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class IsAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (empty(Session::get("user"))) {
            return redirect(Route('auth.login'))->with('error', "Une authentification est nécéssaire");
        } else {
            $p = Users::where("token", Session::get("user"))->exists();
            if ($p) {
            } else {
                Session::pull("user");
                return redirect(Route('auth.login'))->with('error', "Une authentification est nécéssaire");
            }
        }
        return $next($request);
    }
}
