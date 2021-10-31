<?php

namespace App;

use Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;


class Customer extends Authenticatable
{
    use Notifiable;

    protected $table = 'customers';
    protected $fillable = ['email', 'password'];
    protected $casts = ['email_verified_at' => 'datetime'];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
