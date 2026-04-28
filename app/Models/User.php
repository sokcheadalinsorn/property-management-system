<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{  
    protected $table = 'users';

    protected $primaryKey = 'id';
    protected $fillable = [
        'email',
        'password',
    ];

}
