<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class setPageView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // enregistré la visualisation des pages

        if (Session::has("user")) {
            DB::table("pages_views")->insert([
                "id" => uuid_create(),
                "tnrx" => Session::get("user"),
                "page" => $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],
                "ip" => $_SERVER["REMOTE_ADDR"],
                "created_at" => NOW()
            ]);
        } else {
            DB::table("pages_views")->insert([
                "id" => uuid_create(),
                "tnrx" => uniqid(),
                "page" => $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],
                "ip" => $_SERVER["REMOTE_ADDR"],
                "created_at" => NOW()
            ]);
        }

        return $next($request);
    }
}
