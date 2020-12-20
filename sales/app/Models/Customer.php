<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    
    use HasFactory,Notifiable;

    protected $fillable = [
        'username',
        'firstName',
        'lastName',
        'email',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    

}
