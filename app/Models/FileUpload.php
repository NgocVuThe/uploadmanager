<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FolderUpload;

class FileUpload extends Model
{
    protected $table = 'uploads';
    protected $primaryKey = 'file_id';

    public function getFolderName($folder_id)
    {
        $name = FolderUpload::find($folder_id);
        return $name->folder_name;
    }
}
