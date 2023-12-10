<div>
    <form wire:submit="save">

        <div class="fila">
            <label for="">Tema: </label>

            <select wire:model="topic_id" name="tema" id="tema">

                @foreach ($topics as $topic)
                    <option value="{{$topic->id}}">
                        {{ $topic->name }}
                    </option>
                @endforeach

            </select>

            <span 
                class="agregarTema"
                wire:click="$set('openModal', true)"
            >
                <i class="fa-solid fa-circle-plus"></i>
            </span>
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
        <input type="submit" value="Guardar Pregunta" name="guardar" class="btn-guardar">

    </form>

    @if ($openModal)
    
        <div id="modalTema" class="modal">
            <div class="modal-content">
                <span class="close" wire:click="$set('openModal', false)">&times;</span>
                <form wire:submit="saveTopic">
                    <label for="">Agregar Nuevo Tema</label>
                    <input type="text" wire:model="newTopic" required>
                    <input type="submit" value="Guardar Tema" class="btn">

                    

                </form>
            </div>
        </div>

    @endif
</div>
