<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class wp_users extends Authenticatable
{
    protected $fillable = [
        'ID',
        'user_login',
        'display_name',
        'user_email'
    ];
    use HasFactory;

    protected $table = 'wp_users';
}
