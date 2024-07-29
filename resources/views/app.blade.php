<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        <div>
             <!-- Menú de navegación -->
            @auth  {{-- Verifica si el usuario está autenticado --}}
                <nav class="bg-gray-800 w-full py-4">
                    <div class="flex justify-between items-center px-6">
                        <div>
                            <h1 class="text-white text-lg font-bold">Menú</h1>
                        </div>
                        <ul class="flex space-x-4">
                            {{-- <li class="text-white"><a href="{{ route('programas.index') }}" class="hover:text-gray-300">Programas</a></li> --}}
                            {{-- <li class="text-white"><a href="{{ route('factores.index') }}" class="hover:text-gray-300">Factores</a></li> --}}
                            {{-- <li class="text-white"><a href="{{ route('aspectos.index') }}" class="hover:text-gray-300">Aspectos</a></li> --}}
                            {{-- <li class="text-white"><a href="{{ route('modelos_evaluacion.index') }}" class="hover:text-gray-300">Modelos de Evaluación</a></li> --}}
                            {{-- <li class="text-white"><a href="{{ route('caracteristicas.index') }}" class="hover:text-gray-300">Características</a></li> --}}
                            <li class="text-white"><a href="{{ route('docentes.index') }}" class="hover:text-gray-300">Docentes</a></li>
                            <li class="text-white"><a href="{{ route('origenes.index') }}" class="hover:text-gray-300">Origen Institucional</a></li>

                        </ul>
                    </div>
                </nav>
            @endauth  {{-- Fin del bloque condicional --}}

        </div>
        @inertia
    </body>
</html>
