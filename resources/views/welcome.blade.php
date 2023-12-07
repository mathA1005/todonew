<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Votre Todolist</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white selection:bg-red-500 selection:text-white">
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/tasks') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:ring focus:ring-red-500 focus:ring-opacity-50">Tasks</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:ring focus:ring-red-500 focus:ring-opacity-50">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:ring focus:ring-red-500 focus:ring-opacity-50">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                <!-- Remplacez ceci avec votre propre logo SVG -->
                <rect width="62" height="65" rx="10" fill="#6B7280"/>
            </svg>
        </div>
        <h1 class="text-3xl font-semibold text-gray-800 dark:text-white mt-6">Bienvenue sur Votre Todolist</h1>
        <p class="text-gray-600 dark:text-gray-400 mt-2">Organisez votre vie avec facilité.</p>
        <!-- Ajoutez le reste de votre contenu ici -->
    </div>
</div>
</body>
</html>
