<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles
        @filamentStyles
    </head>
    <body>
        <x-navigation.navbar />

        <main class="min-h-screen">
            {{ $slot }}
        </main>

        <x-navigation.footer />
        @livewireScripts
        @filamentScripts
    </body>
</html>
