<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_url',
        'specialty',
        'phoneNumber',
        ];

        public function doctorAvailibility()
    {
        return $this->hasOne(DoctorAvailibility::class, 'id');
    }
}
