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
            <tr>
                <th>No.</th>
                <th>File Name</th>
                <th>Description</th>
                <th>Size</th>
                <th>User Upload</th>
                <th>Folder Name</th>
            </tr>
        </table>
    </div>
@endsection