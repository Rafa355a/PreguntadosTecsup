<x-admin-layout>

    <h2>CATEGORIAS DISPONIBLES</h2>
    <hr>
    <div id="dashboard">
        <div class="card gradiente3 celeste total">
            <span class="tema">Total</span>
            <span class="cantidad">
                {{$topics->sum('questions_count')}}
            </span>
            <span> Preguntas</span>
        </div>

        @foreach ($topics as $topic)
            <a href="{{route('admin.questions.index', [
                'topic_id' => $topic->id,
            ])}}" class="card gradiente1 celeste">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener el cuadro "Total" y asignar un color fijo
            var totalCard = document.querySelector('.celeste.total');
            totalCard.style.backgroundColor = '#66b2ff'; // Color celeste fijo

            // Obtener los demás elementos celestes y asignar colores aleatorios
            var celesteCards = document.querySelectorAll('.celeste:not(.total)');
            celesteCards.forEach(function(card) {
                // Generar un color aleatorio en formato hexadecimal
                var randomColor = '#' + Math.floor(Math.random()*16777215).toString(16);
                card.style.backgroundColor = randomColor;
            });
        });
    </script>

</x-admin-layout>