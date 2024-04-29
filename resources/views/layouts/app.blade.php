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
        @if (env('APP_ENV') == 'local')

            @vite(['resources/css/app.css', 'resources/js/app.js'])

        @elseif(env('APP_ENV') == 'prod')

            <link rel='stylesheet' type='text/css' href="./build/assets/app.css">
            <script src="./build/assets/app.js"></script>

        @endif
        <script type="text/javascript" >localStorage.theme = 'light'</script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="flex flex-col w-full min-h-screen p-0 antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            <div class="fixed w-full z-50 top:0">
            @livewire('navigation-menu')
            </div>
            <!-- Page Heading -->
            @if (isset($header))
                {{ $header }}
            @endif

            <!-- Page Content -->
            <main class="min-h-screen">
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        {{-- <p>Hello world!</p> --}}
    </body>
        <x-footer/>
</html>
