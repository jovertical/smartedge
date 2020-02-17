<?php

namespace App\Http\Controllers\Api;

use App\Answer;
use App\Http\Controllers\Controller;
use App\Quiz;
use Illuminate\Http\Request;

class QuizAnswersController extends Controller
{
    /**
     * Display a listing of the QuizAnswer in a Quiz.
     *
     * @param  \App\Subject $subject
     * @return \Illuminate\Http\Response
     */
    public function index(Quiz $quiz)
    {
        return $quiz->answers;
    }

    /**
     * Store a newly created QuizAnswer for a Quiz in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject $subject
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Quiz $quiz)
    {
        $answer = Answer::findOrFail($request->answer_id);

        return $quiz->createAnswer([ 'answer_id' => $answer->id ]);
    }
}
