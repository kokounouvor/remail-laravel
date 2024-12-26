<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailTracker extends Controller
{
    //
    public function track_open($id)
    {
        DB::table('messages')->where('id', '=', $id)->update(['open' => true, "open_at" => now()]);
        return response()->file(public_path("1x1.png"));
    }
}
