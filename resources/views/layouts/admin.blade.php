<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{asset('css/admin-layout.css')}}">
    <title>Preguntados TECSUP2023</title>

    @livewireStyles
    
</head>

<body>
    <div class="contenedor">
        <header>
            <h1>PREGUNTADOS TECSUP2023</h1>
        </header>
        <div class="contenedor-info">
            
            <nav class="nav" id="nav">
                <ul>
                    <li class="">
                        <a href="{{route('admin.topics.index')}}">
                            <div class="icono {{ request()->routeIs('admin.topics.index') ? 'selected' : '' }}" id="0">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            Categorias 
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.questions.create')}}">
                            <div class="icono {{ request()->routeIs('admin.questions.create') ? 'selected' : '' }}" id="1">
                                <i class="fa-solid fa-question"></i>
                            </div>
                            Nueva Pregunta
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.questions.index')}}">
                            <div class="icono {{ request()->routeIs('admin.questions.index') ? 'selected' : '' }}" id="2">
                                <i class="fa-solid fa-list"></i>
                            </div>
                            Listado Preguntas
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.users.index')}}">
                            <div class="icono {{ request()->routeIs('admin.users.*') ? 'selected' : '' }}" id="3">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            Usuarios
                        </a>
                    </li>
                    <li>
            
                        <a href="{{route('welcome')}}" target="_blank">
                            <div class="icono" id="4">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            PREGUNTADOS
                        </a>
                    </li>
                    <li>
                        {{-- <a href="cerrar-sesion.php">
                            <div class="icono" id="5">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </div>
                            Salir
                        </a> --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
        
                            {{-- <a href="{{route('logout')}}" 
                                class="btn btn-blue"
                                onclick="
                                    event.preventDefault();
                                    this.closest('form').submit();
                                ">
                                CERRAR SESIÓN
                            </a> --}}

                            <a href="{{route('logout')}}"
                                    onclick="
                                    event.preventDefault();
                                    this.closest('form').submit();
                                ">
                                <div class="icono" id="5">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </div>
                                Salir
                            </a>
                            
                        </form>
                    </li>
                </ul>
            </nav>

            <div class="panel">

                {{ $slot }}

            </div>
        </div>
    </div>


    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('swal'))
        <script>
            Swal.fire({!! json_encode(session('swal')) !!});
        </script>
    @endif

    <script>
        Livewire.on('swal', data => {
            Swal.fire(data[0]);
        });
    </script>

    @stack('js')

</body>
</html>