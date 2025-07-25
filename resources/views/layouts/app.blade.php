<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Alpine Js -->
    <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->

    <!-- flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Date picker -->
    <script src="https://unpkg.com/flowbite@2.2.0/dist/datepicker.js"></script>

    <!-- Dark Mode & Light Mode Script -->
    <script>
        (() => {
            const html = document.documentElement;
            const theme = localStorage.getItem('theme');

            if (theme === 'dark') {
                html.classList.add('dark');
            } else if (theme === 'light') {
                html.classList.remove('dark');
            } else {
                // Belum ada pilihan → ikut device
                if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    html.classList.add('dark');
                }
            }
        })();
    </script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://unpkg.com/flowbite@2.3.0/dist/flowbite.min.css" rel="stylesheet" />
    <style>
        #datepicker-inline .datepicker-container {
            box-shadow: none !important;
        }

        #datepicker-inline .datepicker {
            box-shadow: none !important;
        }
    </style>
    @stack('styles')

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="flex flex-col lg:flex-row gap-6">
            <div class="w-64">
                @include('layouts.sidebar')
            </div>
            <!-- Main Content -->
            <div class="flex-grow">
                <main class="p-4">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
    @stack('scripts')
</body>

</html>
