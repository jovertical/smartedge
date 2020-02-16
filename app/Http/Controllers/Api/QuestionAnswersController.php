<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;

class QuestionAnswersController extends Controller
{
    /**
     * Display a listing of the Answer in a Question.
     *
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question)
    {
        return $question->answers()->get();
    }

    /**
     * Store a newly created Answer for a Question in storage.

     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Question $question)
    {
        $request->validate([
            'body' => 'string|max:500',
            'correct' => 'boolean',
        ]);

        return $question->answers()->create($request->only('body', 'correct'));
    }
}
