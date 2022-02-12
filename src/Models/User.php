<?php

namespace ibrah3m\loginwithmetamsk\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
 
    
    protected $fillable = [
        'public_address',
        'nonce',
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
