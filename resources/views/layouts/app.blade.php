<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {!! Meta::toHtml() !!}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <!-- Dynamic font selection based on language -->
    @if (app()->getLocale() == 'en')
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;500;700&display=swap");      
            body {
                font-family: "Poppins", sans-serif;
                background-color: rgb(226, 226, 226);
            }
        </style>
    @elseif(app()->getLocale() == 'ne')
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Rhodium+Libre&display=swap');
            body {
                font-family: 'Rhodium Libre', serif;
            }
        </style>
    @endif

</head>

<body class="overflow-x-hidden">
    {{-- header component here --}}
    <div class="bg-primary w-full">
        @livewire('frontend.inc.header')
    </div>

    {{ $slot }}

    {{-- footer  --}}
    @livewire('frontend.inc.footer')
    {{-- footer  --}}
    @livewireScripts

    @stack('scripts')
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 800, // Adjust the scrolling speed as needed
        });
    </script>
</body>

</html>
