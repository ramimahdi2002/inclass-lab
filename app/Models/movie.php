<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'imgPath',
        'production_year',
        'thumbnail',
        'duration',
        'genre',
        'synopsis',
    ];
}
