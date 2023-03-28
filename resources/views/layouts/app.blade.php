<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')


    </head>
    <body class="antialiased color-4">
        <!-- Dividir la pantalla en secciones -->
        <div class="flex min-h-[100vh] divide-x-2 relative">
            <!-- Sidebar izquierdo-->
            <div class="w-1/4 color-4 max-h-[100vh] overflow-y-auto sticky top-1">
                @include('layouts.theme.left-sidebar')
            </div>

            <!-- Contenido -->
            <section class="w-1/2 color-2">
                {{ $slot }}
            </section>

            <!-- Sidebar derecho -->
            <div class="w-1/4 color-4">
                @include('layouts.theme.right-sidebar')
            </div>
        </div>
    </body>
</html>
