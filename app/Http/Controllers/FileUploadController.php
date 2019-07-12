<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FolderUpload;
use App\Models\FileUpload;

class FileUploadController extends Controller
{
    protected $folder;
    protected $file;

    public function __construct(FolderUpload $folder, FileUpload $file)
    {
        $this->folder = $folder;
        $this->file = $file;
    }
    public function index()
    {
        $files = $this->file->all();
        return view('management.upload.files.list', compact('files'));
    }

    public function create()
    {
        $folders = $this->folder->all();
        return view('management.upload.files.create', compact('folders'));
    }

    public function save(Request $request)
    {
        $getFiles = $request->filename;
        foreach ($getFiles as $getFile) {
            $file = new FileUpload();

            $file->file_name = $getFile->getClientOriginalName();  
            $file->file_size = $getFile->getSize();
            $file->folder_id = $request->folder;
            $getFile->move('management/files', $getFile->getClientOriginalName());
            $file->save();
        }
        return redirect()->route('manager.list.file');
    }
}
