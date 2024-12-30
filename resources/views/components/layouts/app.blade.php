
<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head class="dark">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="./node_modules/preline/dist/preline.js"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" /> --}}
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
   {{-- Script que garante a persistência do tema entre navegações --}}
   <script>
    window.addEventListener('load', () => {
      (function() {
        const themeSwitches = document.querySelectorAll('#hs-theme-switch-to-destroy [data-hs-theme-click-value]');
        const destroy = document.querySelector('#hs-destroy-theme-switch');
        const autoInit = document.querySelector('#hs-auto-init-theme-switch');

        destroy.addEventListener('click', () => {
          themeSwitches.forEach((el) => {
            const {element} = HSThemeSwitch.getInstance(el, true);

            element.destroy();
          });

          destroy.setAttribute('disabled', 'disabled');
          autoInit.removeAttribute('disabled');
        });

        autoInit.addEventListener('click', () => {
          HSThemeSwitch.autoInit();

          autoInit.setAttribute('disabled', 'disabled');
          destroy.removeAttribute('disabled');
        });
      })();
    });
  </script>
    <body class="font-sans antialiased dark:bg-black backdrop-blur-lg dark:text-white/50 bg-gray-50">
        <div class="relative min-h-screen dark:bg-black backdrop-blur-lg dark:text-white/50 bg-gray-50">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="transition duration-300 backdrop-blur-lg border-zinc-900/50 dark:bg-zinc-900/50">
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
                    {{-- <div class="absolute bg-cyan-400 rounded-full animate-pulse opacity-40 blur-3xl right-[200px] w-[900px] h-[900px] top-10"></div> --}}

                    {{-- <div class="absolute right-0 rounded-full  bg-cyan-100 blur-3xl  animate-pulse w-[700px] h-[700px] top-10"></div> --}}
                </div>
                {{-- <img id="background"  class=" absolute -right-20 top-30 max-w-[700px] max-h-screen" src="https://laravel.com/assets/img/welcome/background.svg" /> --}}
                {{ $slot }}
            </main>
        </div>
        {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script> --}}

    </body>
</html>
