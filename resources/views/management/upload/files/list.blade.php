@extends('management.layout.app')
@section('page_title', 'List Files Page')
@section('body_class', 'home_page')

@section('main_page')
    <div class="row">
        <div class="col-md-12 file_title">
            <h3>Files</h3>
            <div class="row">
                <a href="{{ route('manager.create.file') }}" class="btn btn-success">Add new</a>
                <a class="btn btn-default">Filter my records</a>
            </div>
        </div>           
    </div>
    <div class="row table_data">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>File Name</th>
                    <th>Size</th>
                    <th>User Upload</th>
                    <th>Folder Name</th>
                    <th>More</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($files as $file)
                    <tr>
                        <td>{{ $file->file_id }}</td>
                        <td><a href="">{{ $file->file_name }}</a></td>
                        <td>{{ $file->file_size }} (byte)</td>
                        <td>{{ $file->user_upload }}</td>
                        <td><a href="">{{ $file->getFolderName($file->folder_id) }}</a></td>
                        <td>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection