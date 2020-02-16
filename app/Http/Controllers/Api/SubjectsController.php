<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the Subject.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Subject::all();
    }

    /**
     * Store a newly created Subject in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'body' => 'max:500',
        ]);

        return Subject::create($request->only(['name', 'body']));
    }

    /**
     * Display the specified Subject.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        return $subject->with('questions')->first();
    }

    /**
     * Update the specified Subject in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name' => 'required|string',
            'body' => 'max:500',
        ]);

        $subject->update($request->only(['name', 'body']));

        return $subject->with('questions')->first();
    }

    /**
     * Remove the specified Subject from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        return $subject->delete();
    }
}
