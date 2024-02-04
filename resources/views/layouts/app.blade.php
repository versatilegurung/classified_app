<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! Meta::toHtml() !!}

    @vite(['resources/css/app.css', 'resources/css/custom-styles.css', 'resources/js/app.js'])
    @stack('styles')

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
