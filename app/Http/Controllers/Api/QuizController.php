<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Question;
use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function activeQuiz(Request $request)
    {
        $quiz = $request->user()
            ->quizzes
            ->where('completed_at', null)
            ->first();

        return Quiz::with('answers')->find($quiz->id);
    }

    public function nextQuestion(Quiz $quiz)
    {
        $answers = $quiz->answers->pluck('question_id')->toArray();

        $question = $quiz->questions
            ->filter(fn ($q) => !in_array($q->question_id, $answers))
            ->values()
            ->first()
            ->question;

        return Question::with('answers')->find($question->id);
    }
}
