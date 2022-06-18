<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\PersonalAccessToken as Model;

class PersonalAccessToken extends Model
{
    protected $casts = [
        'abilities' => 'json',
        'last_used_at' => 'datetime',
        'expired_at' => 'datetime'
    ];

    protected $fillable = [
        'name',
        'token',
        'abilities',
        'expired_at'
    ];
}
