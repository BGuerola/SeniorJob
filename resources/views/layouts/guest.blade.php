<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>

        <div class="flex flex-col bg-quasinegre h-screen">

            <nav class="pt-5 flex justify-between container mx-auto text-grisclar">

                <a href="/" class="text-4xl font-bold">
                    <x-application-logo class="w-16 h-16 fill-current">
                    </x-application-logo>
                </a>
                <div class="flex justify-end">
                    @auth
                    <a href="{{route('dashboard')}}">Dashboard</a>
                    @else
                    <a href="{{route('login')}}">Login</a>

                    @endauth
                </div>
            </nav>

            <div class="font-sans text-gray-900 antialiased">
                {{ $slot }}
            </div>
        <footer>
            <div class="flex justify-center bg-gris">
                <x-application-logo class="w-16 h-16 fill-current">
                </x-application-logo>
            <div class ="flex flex-col">
                <small class="ml-5 mt-10">&copy; Copyright 2020. All rights reserved.</small>
                <a href ="mailto:info@seniortalent.es" class="ml-5 text-sm">Correo electrónico</a>
            </div>

            </div>
        </footer>
        </div>

    </body>


</html>
