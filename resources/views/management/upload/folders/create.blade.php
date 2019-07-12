@extends('management.layout.app');
@section('page_title', 'Create Files Page')
@section('body_class', 'home_page')

@section('main_page')
    <div class="row">
        <div class="col-md-12 file_title">
            <h3> Add New Folder</h3>
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
                    <label for="">Folder Name*</label>
                    <input type="text" id="" class="form-control" name="foldername">
                </div>
                <button type="submit" name="btn_submit" class="btn btn-danger float-right">Save</button>
            </form>
        </div>
    </div>
@endsection