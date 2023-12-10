<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function show(Topic $topic)
    {

        //El tema debe tener preguntas
        $topic->load('questions');

        if ($topic->questions->count() == 0) {
            return redirect()->route('welcome');
        }

        return view('topics.show', compact('topic'));
    }
}
