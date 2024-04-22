<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'moive_id',
        'title',
        'thumbnail',
        'rating',
        'content',
    ];


    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }
}
