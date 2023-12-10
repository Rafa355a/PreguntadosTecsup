<x-admin-layout>

    <h2>Listado de Preguntas</h2>
    <hr>

    <section id="listadoPreguntas">

        @foreach ($questions as $question)
            <div class="contenedor-pregunta">

                <header>
                    <a href="{{route('admin.questions.index', [
                        'topic_id' => $question->topic_id,
                    ])}}" class="tema">
                        {{ $question->topic->name }}
                    </a>
                    <div class="opciones" style="display: flex">
                        <a href="{{ route('admin.questions.edit', $question) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        <form action="{{ route('admin.questions.destroy', $question) }}" method="POST">
                            @csrf

                            @method('DELETE')

                            <button>
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </header>

                <p class="pregunta">
                    {{ $question->name }}
                </p>

                @foreach ($question->options as $key => $option)
                    <div class="opcion">
                        <div class="caja {{ $option['is_correct'] ? 'pintarVerde' : '' }}">

                            @switch($key)
                                @case(0)
                                    A
                                @break

                                @case(1)
                                    B
                                @break

                                @case(2)
                                    C
                                @break

                                @default
                            @endswitch

                        </div>
                        <span class="texto">
                            {{ $option['name'] }}
                        </span>
                    </div>
                @endforeach

            </div>
        @endforeach

    </section>

    @push('js')
        <script>
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', (e) => {
                    e.preventDefault();

                    Swal.fire({
                        title: "¿Estas seguro?",
                        text: "¡No podrás revertir esto!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "¡Sí, elimínalo!",
                        cancelButtonText: "Cancelar"
                    }).then((result) => {
                        if (result.isConfirmed) {

                            form.submit();

                        }
                    });

                });
            });
        </script>
    @endpush

</x-admin-layout>
