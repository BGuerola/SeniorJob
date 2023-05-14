<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title?? config('app.name', 'Laravel')  }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>

        <nav class="bg-white px-2 sm:px-4 py-2.5 fixed w-full z-20 top-0 left-0 border-b border-gray-200">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="index.html" class="flex items-center">
                <x-application-logo class="w-16 h-16 fill-current">
                </x-application-logo>
            </a>
            <div class="flex md:order-2">
                <button type="button" class="text-white bg-roigclar hover:bg-roig focus:ring-4 focus:outline-none focus:ring-rosa font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">Get started</button>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
              </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
              <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-base md:font-medium md:border-0 md:bg-white">
                <li>
                  <a href= "{{route('inici')}}" class="block py-2 pl-3 pr-4 text-white bg-roig rounded md:bg-transparent md:text-roig md:p-0 " aria-current="page">Página principal</a>
                </li>
                <li>
                  <a href="{{route('landincand')}}" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-roig md:p-0 md::hover:text-white">Página candidato</a>
                </li>
                <li>
                  <a href="{{route('cv')}}" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-roig md:p-0 md::hover:text-white">CV</a>
                </li>
                <li>
                  <a href="{{route('ofertescand')}}" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-roig md:p-0">Ofertas Candidato</a>
                </li>
                <li>
                  <a href="{{route('llistafertes')}}" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-roig md:p-0">Buscar Ofertas</a>
                </li>
              </ul>
            </div>
            </div>
          </nav>

        <div class="flex flex-col bg-quasinegre h-screen">
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
