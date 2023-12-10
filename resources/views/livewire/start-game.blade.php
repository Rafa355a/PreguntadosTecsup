<div>

    @push('css')
        
        <style>
            .tiempo {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                font-size: 1.5rem;
                font-weight: bold;
                color: #fff;
                text-shadow: 0 0 10px #000;
                margin: 0.5rem 0;
            }

            .tiempo-numero {
                font-size: 2rem;
            }

            .tiempo-texto {
                font-size: 1rem;
            }
        </style>

    @endpush

    <div>
        @if ($numPreguntaActual <= $totalPreguntasPorJuego)

            <div class="container-juego" id="container-juego">

                <header class="header">
                    <div class="categoria">
                        {{ $topic->name }}
                    </div>


                    <div class="tiempo" wire:poll="temporizador">
                        <span class="tiempo-numero">00:{{str_pad($tiempo, 2, '0', STR_PAD_LEFT)}}</span>
                        <span class="tiempo-texto">Tiempo</span>
                    </div>

                </header>

                <div class="info">

                    <div class="estadoPregunta">
                        Pregunta <span class="numPregunta">{{$numPreguntaActual}}</span> de {{$totalPreguntasPorJuego}}
                    </div>

                    <h3>
                        {{ $question->name }}
                    </h3>

                    <form wire:submit="verify" wire:key="question-{{$question->id}}">
                        <div class="opciones">

                            @foreach ($question->options as $key => $option)
                                <label class="op{{$loop->iteration}} {{ $key == $respuestaActual ? 'opcionSeleccionada' : '' }}" wire:key="option-{{$key}}">
                                    <p>
                                    {{$option['name']}}  
                                    </p>
                                    <input wire:model.live="respuestaActual" type="radio" name="respuesta" value="{{ $key }}">
                                </label>
                            @endforeach

                        </div>

                        <div class="boton">
                            <input type="submit" value="Siguiente" name="siguiente">
                        </div>
                    </form>
                </div>

            </div>

        @endif
    </div>

    <div
        x-data="{
            correctas: @entangle('correctas'),
            incorrectas: @entangle('incorrectas'),
            totalPreguntasPorJuego: @entangle('totalPreguntasPorJuego'),
            numPreguntaActual: @entangle('numPreguntaActual'),
        }" 
        class="container-final"
        id="container-final"
        x-show="numPreguntaActual > totalPreguntasPorJuego"
        wire:ignore>
        <div class="info">
            <h2>RESULTADO FINAL</h2>
            <div class="estadistica">
                <div class="acierto">
                    <span class="correctas numero" x-text="correctas"></span>
                    CORRECTAS
                </div>
                <div class="acierto">
                    <span class="incorrectas numero" x-text="incorrectas"></span>
                    INCORRECTAS
                </div>
            </div>
            <div class="score">
                <div class="box">
                    <div class="chart"></div>
                    <h2>SCORE</h2>
                </div>
            </div>

            <a href="http://127.0.0.1:8000/">Ir al Menú</a>

        </div>
    </div>

    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>
        
        <script>
            Livewire.on('resultado', () => {

                percent = @this.correctas ? @this.correctas * 100 / @this.totalPreguntasPorJuego : 0;

                $('.chart').attr('data-percent', percent);
                $('.chart').append('<span>' + percent + '%</span>');
                
                $('.chart').easyPieChart({
                    size: 160,
                    barColor: "#36e617",
                    scaleLength: 0,
                    lineWidth: 15,
                    trackColor: "#525151",
                    lineCap: "circle",
                    animate: 2000,
                });

            });
        </script>
        
    @endpush

</div>
