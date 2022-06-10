<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    use HasFactory;

    protected $table = "resources";

    protected $fillable = [
        'resources.id',
        'resources.url',
        'resources.updated_at',
    ];
}
