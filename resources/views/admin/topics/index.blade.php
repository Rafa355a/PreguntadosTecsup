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
            <a href="{{route('admin.questions.index', [
                'topic_id' => $topic->id,
            ])}}" class="card gradiente1">
                <span class="tema">
                    {{ $topic->name }}
                </span>
                <span class="cantidad">
                    {{ $topic->questions_count }}
                </span>
                <span> Preguntas</span>
            </a>
        @endforeach
    </div>

</x-admin-layout>