<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>401 Unauthorized</title>

    @vite(['resources/css/app.css', 'resources/css/custom-styles.css', 'resources/js/app.js'])

</head>
<body class="bg-primary h-screen">

    <div class="flex justify-center items-center h-screen px-7">
        <div class="flex flex-col gap-5 text-center ">
            <span class="text-white text-2xl font-bold">{{ env('APP_NAME')}}</span>
            <p class="text-[7rem] text-warning font-bold leading-tight">401</p>
            <p class="font-bold text-gray-400">Unauthorized</p>
            <x-button class="mt-4 btn btn-secondary text-white">
                <a href="{{ route('home') }}">Go to Home</a>
            </x-button>
        </div>
   
</body>
</html>