<?php

namespace App\Http\Controllers\Upload;

use App\Http\Controllers\Controller;
use App\Http\Requests\Upload\CreateRequest;
use App\Models\UploadForm;
use App\Queries\QueryBuilderUpload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(QueryBuilderUpload $upload)
    {
        return view('upload.index', [
            'upload' => $upload->getUpload()
        ]);
    }

    public function store(CreateRequest $request)
    {
        $upload = new UploadForm();
        $upload->name = $request->name;
        $upload->phone = $request->phone;
        $upload->email = $request->email;
        $upload->information = $request->information;
        $upload->save();
        return redirect('upload')->with('success', 'Успех!');
    }
}
