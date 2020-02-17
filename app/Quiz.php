<?php

namespace App;

class Quiz extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function questions()
    {
        return $this->hasMany(QuizQuestion::class);
    }

    public function createQuestion($attributes)
    {
        return $this->questions()->create($attributes);
    }

    public function answers()
    {
        return $this->hasMany(QuizAnswer::class);
    }

    public function createAnswer($attributes)
    {
        return $this->answers()->create($attributes);
    }
}
