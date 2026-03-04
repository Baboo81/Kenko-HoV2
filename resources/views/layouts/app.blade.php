<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Kenko-Ho') }}</title>

        <!-- Vite -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

    <body>
        <div id="app">

            <!-- NAVBAR CUSTOM -->
            @include('partials.nav')
            <!-- 👆 tu peux créer un partial pour ta navbar -->

            <main class="py-4">
                @yield('content')
            </main>

        </div>
    </body>
</html>
