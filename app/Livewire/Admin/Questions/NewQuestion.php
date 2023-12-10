<?php

namespace App\Livewire\Admin\Questions;

use App\Models\Question;
use App\Models\Topic;
use Livewire\Component;

class NewQuestion extends Component
{
    public $topics;

    public $topic_id;

    public $name;

    public $options = [
        [
            'name' => '',
            'is_correct' => false,
        ],
        [
            'name' => '',
            'is_correct' => false,
        ],
        [
            'name' => '',
            'is_correct' => false,
        ],
    ];

    public $correct_answer = 0;



    public $openModal = false;

    public $newTopic;

    public function mount()
    {
        $this->topics = Topic::all();
        $this->topic_id = $this->topics->first()->id;
    }

    public function save()
    {

        $this->validate([
            'topic_id' => 'required|exists:topics,id',
            'options.*.name' => 'required',
            'correct_answer' => 'required|integer',
        ]);

        $this->options[$this->correct_answer]['is_correct'] = true;

        Question::create([
            'topic_id' => $this->topic_id,
            'name' => $this->name,
            'options' => $this->options,
        ]);

        $this->dispatch('swal', [
            'icon' => 'success',
            'title' => '¡Pregunta creada!',
            'text' => 'La pregunta se ha creado correctamente.',
        ]);

        $this->reset(['name', 'options']);
    }

    public function saveTopic()
    {
        $this->validate([
            'newTopic' => 'required|unique:topics,name',
        ]);

        Topic::create([
            'name' => $this->newTopic,
        ]);

        $this->topics = Topic::all();

        $this->reset('newTopic');
        $this->openModal = false;
    }

    public function render()
    {
        return view('livewire.admin.questions.new-question');
    }
}
