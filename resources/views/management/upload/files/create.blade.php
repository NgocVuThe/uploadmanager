@extends('management.layout.app')
@section('page_title', 'Create Files Page')
@section('body_class', 'home_page')

@section('main_page')
    <div class="row">
        <div class="col-md-12 file_title">
            <h3> Add New Files</h3>
        </div>           
    </div>
    <div class="row form_data">
        <div class="col-md-12 create_title">
            <p>Create</p>
        </div>
        <div class="col-md-12">
            <form action="" type="post" method="POST" enctype="multipart/form-data" class="">
                @csrf
                <div class="form-group">
                    <label for="">Choose Folder</label>
                    <select name="folder" id="" class="form-control">
                        @foreach ($folders as $folder)
                            <option value="{{ $folder->folder_id }}">{{ $folder->folder_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">File Name</label>
                    <input multiple type="file" id="file_upload" class="form-control file-upload" data-bucket="filename" data-filekey="filename" data-url="" name="filename[]" onchange="updateList(this)">
                </div>
                <div id="preview_data">

                </div>
                <button type="submit" name="btn_submit" class="btn btn-danger float-right">Save</button>
            </form>
        </div>
    </div>
    <script>
        updateList = function() {
        var input = document.getElementById('file_upload');
        var output = document.getElementById('preview_data');
        output.innerHTML = '<ul>';
        for (var i = 0; i < input.files.length; ++i) {
            output.innerHTML += '<li>' + input.files.item(i).name + ' size(' + input.files.item(i).size + ' bytes)' + '<a href="#" id = '+'data-'+i+' class="btn-append">Remove</a>'+ '</li>' ;
        }
        output.innerHTML += '</ul>';
    }
    </script>
@endsection