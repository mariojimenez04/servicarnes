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

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body>

        <div class="flex">
            <aside class="sidebar shadow-xl">
                <h2>ServiCarnes</h2>
    
                <nav class="sidebar-nav">
                    <a href="/admin">Inicio</a>
                    <a href="{{ route('users.config') }}">Usuarios</a>
                    <a href="/remisiones">Remisiones</a>
                    <a href="/notas-credito">Notas Credito</a> 
                </nav>
            </aside>
    
            <div class="dashboard">
                <div class="flex gap-3 justify-between">
                    <div>
                        @yield('navegacion')
                    </div>
                    <div>
                        <p>Hola: Administrador</p>

                        <a href="/logout">Cerrar sesion</a>
                    </div>
                </div>
                @yield('contenido')
            </div>
        </div>


    </body>
</html>
