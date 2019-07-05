<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('css/manager.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body @yield('content_attribute') class="page_body @yield('body_class')">
    <div class="wraper_page container-fluid">
        <div class="row">
            @include('management.partials.top')
        </div>
        <div class="row">
            <div class="column_left col-md-2">
                @include('management.partials.column_left')
            </div>
            <div class="column_middle col-md-10">
                <div class="container @yield('page_description')">
                    @yield('main_page')
                </div>
                @yield('script')
            </div>
        </div>
    </div>
</body>
</html>