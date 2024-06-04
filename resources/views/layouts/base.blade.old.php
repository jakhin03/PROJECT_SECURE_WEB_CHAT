<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'talky') }}</title>
        <link rel="icon favicon" href="{{ asset('images/favicon.png') }}">

        <!-- Fonts -->

        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @yield('scripts')
    </head>
    <body>
        @yield('body')
    </body>
</html>
