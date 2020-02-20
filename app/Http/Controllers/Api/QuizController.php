<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function activeQuiz(Request $request)
    {
        return $request->user()
            ->quizzes
            ->where('completed_at', null)
            ->first();
    }

    public function nextQuestion(Quiz $quiz)
    {
        $answers = $quiz->answers->pluck('question_id')->toArray();

        return $quiz->questions
            ->filter(fn ($q) => !in_array($q->question_id, $answers))
            ->values()
            ->first();
    }
}
