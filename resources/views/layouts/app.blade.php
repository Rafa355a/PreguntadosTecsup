<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <link rel="stylesheet" href="{{asset('css/app-layout.css')}}">
    
    @livewireStyles
    @vite(['resources/js/app.js'])

    @stack('css')
</head>

<body>

    <div class="navbar">
        <span class="navbar-title">PREGUNTADOS</span>

        @auth
            <div class="navbar-login">
    
                @if (auth()->user()->is_admin)
                    <a href="{{route('admin.dashboard')}}" class="btn btn-blue">ADMINISTRADOR</a>
                @endif


                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{route('logout')}}" 
                        class="btn btn-blue"
                        onclick="
                            event.preventDefault();
                            this.closest('form').submit();
                        ">
                        CERRAR SESIÓN
                    </a>
                    
                </form>

            </div>
        @endauth
    </div>

    <div class="container">
        
        {{$slot}}

    </div>

    @livewireScripts

    @stack('js')

</body>

</html>
