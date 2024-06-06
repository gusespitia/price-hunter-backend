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
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased overflow-x-hidden">
    <x-banner />
    <div class="min-h-screen bg-gray-100 dark:bg-gray-800">
        @livewire('navigation-menu')
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <footer class="bg-white dark:bg-gray-800 shadow mt-10">
            <div class="max-w-7xl mx-auto py-10 px-4 overflow-hidden sm:px-6 lg:px-8">
                <div class="my-2 md:flex justify-center">
                    <div class="py-2 px-5">
                        <div class="text-base leading-6 text-gray-600 dark:text-gray-500">
                            © 2024 Price Hunter. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @stack('modals')
    @livewireScripts
</body>
</html>
