<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('topic')
            ->when(request('topic_id'), function ($query, $topic_id) {
                $query->where('topic_id', $topic_id);
            })
            ->get();

        return view('admin.questions.index', compact('questions'));
    }
    public function create()
    {
        $topics = Topic::all();
        return view('admin.questions.create', compact('topics'));
    }
    public function store(Request $request)
    {
        //
    }

    public function show(Question $question)
    {
        //
    }

    public function edit(Question $question)
    {
        return view('admin.questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        //
    }

    public function destroy(Question $question)
    {
        $question->delete();

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Eliminado!',
            'text' => 'La pregunta se eliminó correctamente.',
        ]);

        return redirect()->route('admin.questions.index');
    }
}
