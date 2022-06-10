<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\UploadedFile;

class UploadService
{
    public function uploadImage(UploadedFile $file):string
    {
        $path = $file->storeAs('news', $file->hashName(), 'custom_upload');
        if(!$path){
            throw UploadException("File wasn\'t upload.");
        }
        return $path;
    }
}
