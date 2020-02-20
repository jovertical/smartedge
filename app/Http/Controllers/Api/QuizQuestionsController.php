<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Quiz;
use App\QuizQuestion;
use Illuminate\Http\Request;

class QuizQuestionsController extends Controller
{
    /**
     * Display a listing of the QuizQuestion in a Quiz.
     *
     * @param  \App\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function index(Quiz $quiz)
    {
        return $quiz->questions;
    }

    /**
     * Store a newly created QuizQuestion for a Quiz in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Quiz $quiz)
    {
        $request->validate([
            'question_count' => "numeric|min:1|max:{$quiz->subject->questions->count()}",
        ]);

        QuizQuestion::where('quiz_id', $quiz->id)->delete();

        $quiz->subject->questions
            ->random($request->question_count)
            ->each(function ($q, $i) use ($quiz) {
                $quiz->createQuestion([
                    'question_id' => $q->id,
                    'number' => $i + 1,
                ]);
            });

        return $quiz->questions;
    }
}
