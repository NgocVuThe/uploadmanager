<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page_title')</title>
    <link rel="icon" href="{{ url('images/icons/icon-web.png') }}">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body @yield('content_attribute') class="page_body @yield('body_class')">
@yield('main_page')
</body>
</html>