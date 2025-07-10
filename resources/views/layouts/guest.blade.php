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

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div
            class="flex flex-col md:flex-row w-full max-w-4xl bg-white shadow-lg rounded-xl overflow-hidden min-h-[500px]">
            <div class="hidden md:block md:w-1/2">
                <img src="https://wallpaperaccess.com/full/5994529.png" alt="Nature"
                    class="w-full h-full object-cover">
            </div>
            <div
                class="w-full md:w-1/2 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg min-h-[400px] flex flex-col items-center justify-center">

                <div class="max-w-sm w-full text-center mb-6">
                    <span class="block font-bold text-2xl mb-1">Hello Again</span>
                    <span class="block font-light text-sm break-words">
                        Collaborate with your team and stay ahead on every project. Simple tools for better task management.
                    </span>
                </div>

                <div class="w-full max-w-sm">
                    {{ $slot }}
                </div>

            </div>
        </div>
    </div>
</body>

</html>
