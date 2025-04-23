<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email_send_log extends Model
{
    use HasFactory;

    protected $fillable=["email_service_id","recipient_email","sent","sent_at"];
 
}
