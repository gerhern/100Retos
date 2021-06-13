<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_challenge',
        'description_challenge',
        'imgAlt_challenge',
        'img_challenge',
    ];
}
