<?php

namespace App\Http\Controllers\Api;

use App\Answer;
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

        if (! $quiz) {
            abort(404);
        }

        return Quiz::with('questions', 'answers')->find($quiz->id);
    }

    public function completedQuiz(Request $request)
    {
        $quiz = $request->user()
            ->quizzes
            ->where('completed_at', '!=', null)
            ->latest()
            ->first();

        if (! $quiz) {
            abort(404);
        }

        return Quiz::with('questions', 'answers')->find($quiz->id);
    }

    public function nextQuestion(Quiz $quiz)
    {
        $answers = $quiz->answers->pluck('question_id')->toArray();

        $quizQuestion = $quiz->questions
            ->filter(fn ($q) => !in_array($q->question_id, $answers))
            ->values()
            ->first();

        if (! $quizQuestion) {
            $quiz->completed_at = now();
            $quiz->update();

            abort(404);
        }

        $question = Question::with('answers')->find($quizQuestion->question->id);
        $question->question = $quizQuestion;

        return $question;
    }

    public function tally(Quiz $quiz)
    {
        $correct = $quiz->answers
            ->filter(fn($a) => Answer::find($a->answer_id)->correct)
            ->count();

        return [
            'correct' => $correct,
            'total' => $quiz->question_count,
        ];
    }
}
