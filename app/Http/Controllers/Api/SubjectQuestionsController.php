<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Subject;
use Illuminate\Http\Request;

class SubjectQuestionsController extends Controller
{
    /**
     * Display a listing of the Question in a Subject.
     *
     * @param  \App\Subject $subject
     * @return \Illuminate\Http\Response
     */
    public function index(Subject $subject)
    {
        return $subject->questions;
    }

    /**
     * Store a newly created Question for a Subject in storage.

     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject $subject
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Subject $subject)
    {
        $request->validate([
            'body' => 'string|max:500',
        ]);

        return $subject->questions()->create($request->only('body'));
    }
}
