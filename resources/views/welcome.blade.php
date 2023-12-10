<x-app-layout>

    @section('title', 'PREGUNTADOS TECSUP2023')

    @push('css')
        
        <link rel="stylesheet" href="{{asset('css/estilo.css')}}">

    @endpush

    

    @guest

        <div class="e3_2">
            <div class="e3_3">
                <div class="e3_6"></div>
                <span class="e3_7">Preguntados</span>
                <span class="e3_15">TECSUP 2023</span>
                <div class="e3_12"></div>
                <div class="e3_11"></div>
                <a href="{{route('login')}}" class="e3_13">Ingresar</a>
                <a href="{{route('register')}}" class="e3_14">Registrar</a>
            </div>
        </div>

    @else
        
        <div class="question" id="cantainer">
            <div class="left">
                <div class="logo">
                    PREGUNTADOS TECSUP2023
                </div>
            </div>
            <br>
            <div class="right">
                <h3>Elige una categoría</h3>
                <div class="categorias">
                    @foreach ($topics as $topic)
                        <div class="categoria">
                                
                            <a href="{{route('topics.show', $topic)}}">
                                {{$topic->name}}
                            </a>
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    @endguest

</x-app-layout>