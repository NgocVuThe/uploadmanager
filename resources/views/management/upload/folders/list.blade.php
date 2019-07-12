@extends('management.layout.app')
@section('page_title', 'List Folders Page')
@section('body_class', 'folder_list_page')

@section('main_page')
    <div class="row">
        <div class="col-md-12 file_title">
            <h3>Folders</h3>
            <div class="row">
                <a href="{{ route('manager.create.folder') }}" class="btn btn-success">Add new</a>
                <a class="btn btn-default">Filter my records</a>
            </div>
        </div>           
    </div>
    <div class="row table_data">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Folders Name</th>
                    <th>Description</th>
                    <th>User Create</th>
                    <th>More</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($folders as $folder)
                    <tr>
                        <td>{{ $folder->folder_id }}</td>
                        <td>{{ $folder->folder_name }}</td>
                        <td>{{ $folder->description }}</td>
                        <td>{{ $folder->user_id }}</td>
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