<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Subject;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectQuizzesController extends Controller
{
    /**
     * Store a newly created Quiz for a given Subject in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Subject $subject)
    {
        $request->validate([
            'time_mode' => 'required|in:classic,timed',
            'checking_mode' => 'required|in:per_item,per_quiz',
            'questions_count' => 'required|integer',
        ]);

        $user = User::find(Auth::id());

        $attributes = $request->only(
            'time_mode',
            'checking_mode',
            'questions_count'
        );

        return $user->createQuiz(array_merge($attributes, [
            'subject_id' => $subject->id,
        ]));
    }
}
