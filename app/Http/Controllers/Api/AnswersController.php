<?php

namespace App\Http\Controllers\Api;

use App\Answer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    /**
     * Display the specified Answer.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        return $answer;
    }

    /**
     * Update the specified Answer in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        $request->validate([
            'body' => 'required|string|max:500',
            'correct' => 'boolean',
        ]);
        
        if ($request->correct) {
            $answer->question->answers->each(function ($a) {
                $a->update(['correct' => false]);
            });
        }

        $answer->update($request->only('body', 'correct'));

        return $answer;
    }

    /**
     * Remove the specified Answer from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        $answer->delete();
    }
}
