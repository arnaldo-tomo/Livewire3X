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
        {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" /> --}}
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 bg-gray-50">
        <div class="relative min-h-screen dark:bg-black dark:text-white/50 bg-gray-50">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="transition duration-300 border-zinc-900 dark:bg-zinc-900">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <img id="background"  class=" absolute -left-20 top-30 max-w-[700px] max-h-screen" src="https://laravel.com/assets/img/welcome/background.svg" />
                <div class="relative animate-bounce ">
                    {{-- <div class="absolute right-0 rounded-full bg-cyan-500 animate-pulse blur-xl w-80 h-80 top-10"></div> --}}
                    <div class="absolute right-0 rounded-full  bg-[#ff2b202c] blur-3xl  animate-pulse w-[900px] h-[600px] top-10"></div>
                    {{-- <div class="absolute right-0 rounded-full  bg-cyan-100 blur-3xl  animate-pulse w-[700px] h-[700px] top-10"></div> --}}
                </div>
                {{-- <img id="background"  class=" absolute -right-20 top-30 max-w-[700px] max-h-screen" src="https://laravel.com/assets/img/welcome/background.svg" /> --}}
                {{ $slot }}
            </main>
        </div>
        {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script> --}}

    </body>
</html>
