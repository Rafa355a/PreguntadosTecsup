<div>
    <form wire:submit="save">

        <div class="fila">
            <label for="">Tema: </label>

            <select wire:model="topic_id" id="tema">

                @foreach ($topics as $topic)
                    <option value="{{$topic->id}}">
                        {{ $topic->name }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="fila">
            <label for="">Pregunta:</label>
            <textarea wire:model="name" cols="30" rows="10" required></textarea>
        </div>

        <div class="opciones">
            <div class="opcion">
                <label for="">Opcion A</label>
                <input wire:model="options.0.name" type="text" name="opcion_a" id="" required>
            </div>
            <div class="opcion">
                <label for="">Opcion B</label>
                <input wire:model="options.1.name" type="text" name="opcion_b" required>
            </div>
            <div class="opcion">
                <label for="">Opcion C</label>
                <input wire:model="options.2.name" type="text" name="opcion_c" required>
            </div>
        </div>

        <div class="opcion">
            <label for="">Correcta</label>
            <select wire:model="correct_answer" class="correcta">
                <option value="0">A</option>
                <option value="1">B</option>
                <option value="2">C</option>
            </select>
        </div>

        <hr>
        <input type="submit" value="Actualizar Pregunta" name="guardar" class="btn-guardar">

    </form>
</div>
