<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>talky</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app" class="h-100"></div>

        <script>window.__app__ = @json($data)</script>
    </body>
</html>