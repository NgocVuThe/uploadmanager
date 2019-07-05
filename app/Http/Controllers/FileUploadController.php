<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('management.upload.files.list');
    }

    public function create()
    {
        return view('management.upload.files.create');
    }
}
