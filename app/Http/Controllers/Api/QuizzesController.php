<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Quiz;

class QuizzesController extends Controller
{
    /**
     * Display the specified Quiz.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        return Quiz::with('user', 'subject', 'questions', 'answers')
            ->find($quiz->id);
    }
}
