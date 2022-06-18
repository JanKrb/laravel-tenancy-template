<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class CentralUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Generate Personal Access Token for authentication.
     * @param bool $rememberMe
     * @return mixed
     */
    public function createPersonalAccessToken(?bool $rememberMe = false)
    {
        $tokenResult = $this->createToken('Personal Access Token', ['*']);
        $token = $tokenResult->accessToken;

        if ($rememberMe) {
            $token->expires_at = now()->addWeeks(1);
        }

        $token->save();

        return [
            'access_token' => $tokenResult->plainTextToken,
            'token_type' => 'Bearer',
        ];
    }
}
