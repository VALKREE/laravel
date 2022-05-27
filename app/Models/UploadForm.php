<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadForm extends Model
{
    use HasFactory;

    protected $table = "upload_form";

    protected $fillable = [
        'id', 'name', 'phone', 'email', 'information', 'created_at', 'update_at'
    ];
}
