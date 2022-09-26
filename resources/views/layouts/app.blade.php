<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ServiCarnes - @yield('titulo')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <!-- Styles -->
        {{-- @vite('resources/css/app.css') --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        @yield('estilos')
    </head>
    <body>

        <div class="d-flex">
            <aside class="sidebar shadow-lg">
                <h2>ServiCarnes</h2>
                <h3 class="text-white fw-bold text-center mt-3">Accesos directos</h3>
                <nav class="sidebar-nav">
                    <a href="/index">Inicio</a>
                    <a href="{{ route('users.config') }}">Usuarios</a>
                    <a href="/remisiones">Remisiones</a>
                    <a href="/notas-credito">Notas Credito</a> 
                </nav>
            </aside>
    
            <div class="dashboard">
                <div class="d-flex gap-3 justify-content-between mb-5">
                    <div>        
                        <p>Version "0.0.11</p>
                        @yield('navegacion')
                    </div>
                    <div>
                        <p class="fw-bold">Hola: {{ auth()->user()->user_name }}</p>

                        <a href="/logout">Cerrar sesion</a>
                    </div>
                </div>
                @yield('contenido')
            </div>
        </div>


    </body>
</html>
