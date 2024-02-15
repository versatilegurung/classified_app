<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Error Not found</title>

    @vite(['resources/css/app.css', 'resources/css/custom.css', 'resources/js/app.js'])

</head>

<body class="bg-primary h-screen">

    <div class="flex justify-center items-center h-screen px-7">
        <div class="flex flex-col gap-5 text-center ">
            <span class="text-white text-2xl font-bold">{{ env('APP_NAME') }}</span>
            <p class="text-[7rem] text-warning font-bold leading-tight">404</p>
            <p class="font-bold text-gray-200">{{ __('404-error') }}</p>
            <x-button class="mt-4 btn btn-secondary text-white">
                {{-- return redirct to last page --}}
                <a href="{{ url()->previous() }}">Go Back</a>
                {{-- return to home page --}}
                {{-- <a href="{{ url()->previous() }}">Go Back</a>
 --}}

            </x-button>
        </div>

</body>

</html>
