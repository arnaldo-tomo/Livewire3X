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
<script src="./node_modules/preline/dist/preline.js"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black backdrop-blur-sm dark:text-white/50 bg-gray-50">
        <div class="relative min-h-screen dark:bg-black backdrop-blur-sm dark:text-white/50 bg-gray-50">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="transition duration-300 border-zinc-900 backdrop-blur-xl dark:bg-zinc-900/50">
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
                    <div class="absolute right-0 rounded-full  bg-[#ff2b202c] blur-3xl  animate-pulse w-[500px] h-[700px] top-10"></div>
                    {{-- <div class="absolute right-0 rounded-full  bg-cyan-100 blur-3xl  animate-pulse w-[700px] h-[700px] top-10"></div> --}}
                </div>
                {{-- <img id="background"  class=" absolute -right-20 top-30 max-w-[700px] max-h-screen" src="https://laravel.com/assets/img/welcome/background.svg" /> --}}
                {{ $slot }}
                <div wire:offline id="cookies-simple-with-dismiss-button" class="fixed bottom-0 start-1/2 transform -translate-x-1/2 z-[60] sm:max-w-4xl w-full mx-auto p-6">
                    <!-- Card -->
                    <div class="p-4 bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
                      <div class="flex items-center justify-between gap-x-5 sm:gap-x-10">
                        <div class="grow">
                          <h2 class="text-sm text-gray-600 dark:text-neutral-400">
                            By continuing to use this site you consent to the use of cookies in accordance with our <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">Cookies Policy.</a>
                          </h2>
                        </div>
                        <button type="button" class="inline-flex items-center p-2 text-sm font-semibold text-gray-800 bg-gray-100 border border-transparent rounded-full gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-white/10 dark:text-white dark:hover:bg-white/20 dark:hover:text-white dark:focus:bg-white/20 dark:focus:text-white" data-hs-remove-element="#cookies-simple-with-dismiss-button">
                          <span class="sr-only">Dismiss</span>
                          <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
                        </button>
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>
                <p class="alert alert-warning" wire:offline>
                    Whoops, your device has lost connection. The web page you are viewing is offline.
                </p>
            </main>
        </div>
        {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script> --}}

    </body>
</html>
