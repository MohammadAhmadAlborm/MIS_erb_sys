<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
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
