<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = "Users";

    protected $fillable = [
        'id', 'name', 'email', 'is_admin', 'password', 'avatar', 'last_login_at'
    ];
}
