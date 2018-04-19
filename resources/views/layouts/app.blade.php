<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Learn Kirtan') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="build/css/app.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-4 mb-3">
            <div class="col-sm-12 text-center">
                <a href="{{ url('/') }}">
                    {{ config('app.name', 'Learn Kirtan') }}
                </a>
            </div>
        </div>

        @include('layouts.partials._notifications')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
