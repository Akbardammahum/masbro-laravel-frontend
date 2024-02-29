<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body class="bg-blue-600 w-full mx-auto flex flex-col">
    @include('layouts.header')
    <div class="mx-auto w-full h-screen p-20 bg-slate-200 grid grid-cols-2 gap-2">
        {{-- card 1 --}}
        <div class="bg-white p-6 w-fit h-fit rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-2 text-gray-800">Card with no image</h2>
            <p class="text-gray-700">This is my cool new card!</p>
            <p class="text-gray-700">This is my cool new card!</p>

        </div>

        {{-- card 2 --}}
        <div class="bg-white p-6 w-fit h-fit rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-2 text-gray-800">Card with no image</h2>
            <p class="text-gray-700">This is my cool new card!</p>

        </div>
    </div>
</body>

</html>
