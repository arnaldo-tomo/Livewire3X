<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
        <body class="font-sans antialiased">
        <div class="flex flex-col items-center min-h-screen pt-96 sm:justify-center sm:pt-0 bg-gray-50/50- text-black/50 dark:bg-black dark:text-white/50">
            <img id="background"  class=" absolute -left-20 top-0 max-w-[877px] max-h-screen" src="https://laravel.com/assets/img/welcome/background.svg" />

            <div class="z-50 w-[500px] px-6 py-4 mt-6 backdrop-blur-md overflow-hidden bg-white/50 shadow-md sm:max-w-md dark:bg-zinc-900/50 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20] rounded-lg sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
