<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body class="font-sans antialiased overflow-x-hidden bg-gray-100 dark:bg-gray-800">
    <x-banner />
    @livewire('navigation-menu')
    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    <footer class="bg-white dark:bg-gray-800 shadow mt-10 bottom-0 w-full">
        <div class="max-w-7xl mx-auto py-6 px-4 overflow-hidden sm:px-6 lg:px-8">
            <div class="my-2 md:flex justify-center">
                <div class="py-2 px-5">
                    <div class="text-base leading-6 text-gray-600 dark:text-gray-500">
                        © 2024 Price Hunter. All rights reserved.
                    </div>
                </div>
                <div class="py-2 px-5 justify-right">
                    <a href="{{ url('/docs') }}" class="text-base leading-6 no-underline text-gray-600 dark:text-gray-600 hover:text-gray-900 dark:hover:text-black">
                        <i class="fas fa-book"></i> API Documentation
                    </a>
                </div>
            </div>
        </div>
    </footer>
    @stack('modals')
    @livewireScripts
</body>
</html>
