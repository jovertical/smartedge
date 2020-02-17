<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Quiz;
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
            'questions_count' => "numeric|max:{$quiz->subject->questions->count()}",
        ]);

        return $quiz->subject->questions
            ->random($request->questions_count)
            ->each(fn ($q) => $quiz->createQuestion(['question_id' => $q->id]));
    }
}
