<?php

namespace App\Livewire\Admin\Questions;

use App\Models\Question;
use App\Models\Topic;
use Livewire\Component;

class EditQuestion extends Component
{
    public $question;

    public $topics;

    public $topic_id;

    public $name;

    public $options = [];

    public $correct_answer = 0;

    public function mount($question)
    {
        $this->topics = Topic::all();

        $this->fill(
            $question->only([
                'topic_id',
                'name',
                'options',
            ])
        );

        $this->correct_answer = $this->options->search(function ($option) {
            return $option['is_correct'];
        });

    }

    //valida y guarda cambios de la pregunta y respuesta
    public function save()
    {
        $this->validate([
            'topic_id' => 'required|exists:topics,id',
            'options.*.name' => 'required',
            'correct_answer' => 'required|integer',
        ]);

        $this->options = collect($this->options)->map(function ($option, $index) {
            return [
                'name' => $option['name'],
                'is_correct' => $index == $this->correct_answer,
            ];
        })->toArray();

        $this->question->update([
            'topic_id' => $this->topic_id,
            'name' => $this->name,
            'options' => $this->options,
        ]);

        $this->dispatch('swal', [
            'icon' => 'success',
            'title' => '¡Bien hecho!',
            'text' => 'La pregunta se actualizó correctamente.'
        ]);

    }

    public function render()
    {
        return view('livewire.admin.questions.edit-question');
    }
}
