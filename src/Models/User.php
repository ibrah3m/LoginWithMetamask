<?php

namespace ibrah3m\loginwithmetamsk\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
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
        'public_address',
        'nonce',
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
    
    public function Renonce()
    {
        $digits=10;
        $random= rand(pow(10, $digits-1), pow(10, $digits)-1);
        $this->nonce = $random;
        return $this->save();
        
    }
    
    protected static function booted()
    {
        static::created(function ($user) {
            //
            $digits=10;
            $random= rand(pow(10, $digits-1), pow(10, $digits)-1);
            $user->nonce = $random;
            $user->save();
        });
    }




}
