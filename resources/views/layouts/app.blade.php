<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {!! Meta::toHtml() !!}

    {{-- favicon  --}}
    <link rel="icon" href="{{ asset('storage/page_images/favicon.png') }}" type="image/png" sizes="16x16">
    {{-- favicon  --}}

    {{-- vite --}}

    @vite(['resources/css/app.css', 'resources/css/custom.css', 'resources/js/app.js'])
    @stack('styles')

    <script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.0/dist/smooth-scroll.polyfills.min.js"></script>

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
