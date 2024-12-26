<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pages_view extends Model
{
    use HasFactory;

    public function extractEmails($input)
    {
        // Utilisez une expression régulière pour rechercher les adresses email
        $pattern = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/';
        preg_match_all($pattern, $input, $matches);
        return $matches[0];
    }
}
