<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FolderUpload;

class FolderUploadController extends Controller
{
    protected $folder;

    public function __construct(FolderUpload $folder)
    {
        $this->folder = $folder;
    }

   public function index()
   {
       $folders = $this->folder->all();
       return view('management.upload.folders.list', compact('folders'));
   }

   public function create()
   {
        return view('management.upload.folders.create');

   }
}
