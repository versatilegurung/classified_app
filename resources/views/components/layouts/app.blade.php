<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        {!! Meta::toHtml() !!}

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    
    </head>
    <body>
        {{ $slot }}

        @livewireScripts
    </body>
</html>
