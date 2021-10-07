<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Styles -->
    <link href="{{ asset('vendor/adminkit/static/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendor/datatables/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/alertifyjs/css/alertify.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/alertifyjs/css/themes/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/alertifyjs/css/themes/default.css') }}" rel="stylesheet">

</head>
<body>

@inertia

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('vendor/alertifyjs/alertify.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
