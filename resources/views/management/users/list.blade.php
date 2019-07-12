@extends('management.layout.app')
@section('page_title', 'List Folders Page')
@section('body_class', 'folder_list_page')

@section('main_page')
    <div class="row">
        <div class="col-md-12 file_title">
            <h3>Users List</h3>
            <div class="row">
                <a href="" class="btn btn-success">Add new</a>
                <a class="btn btn-default">Filter my records</a>
            </div>
        </div>           
    </div>
    <div class="row table_data">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>More</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->user_id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
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