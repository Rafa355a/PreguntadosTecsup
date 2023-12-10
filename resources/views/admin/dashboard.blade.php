<x-admin-layout>

    <h2>CATEGORIAS DISPONIBLES</h2>
    <hr>
    <div id="dashboard">
        <div class="card gradiente3">
            <span class="tema">Total</span>
            <span class="cantidad">
                {{$topics->sum('questions_count')}}
            </span>
            <span> Preguntas</span>
        </div>

        @foreach ($topics as $topic)
            <div class="card gradiente1">
                <span class="tema">
                    {{ $topic->name }}
                </span>
                <span class="cantidad">
                    {{ $topic->questions_count }}
                </span>
                <span> Preguntas</span>
            </div>
        @endforeach
    </div>

</x-admin-layout>