<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Notification extends Model
{
    use HasFactory;

    public function add($title, $message)
    {
        Notification::insert([
            "user"=>Session::get("user"),
            "title" => $title,
            "message" => $message,
            "created_at" => now(),
        ]);
    }

    public function addS($user,$title, $message)
    {
        Notification::insert([
            "user"=>$user,
            "title" => $title,
            "message" => $message,
            "created_at" => now(),
        ]);
    }
}
