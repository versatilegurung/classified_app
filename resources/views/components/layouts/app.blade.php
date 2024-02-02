<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        {{ $slot }}
=======
        
        {!! Meta::toHtml() !!}

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    
    </head>
    <body>
        {{ $slot }}

        @livewireScripts
>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
    </body>
</html>
