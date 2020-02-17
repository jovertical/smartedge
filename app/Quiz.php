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
        return $this->hasOne(Subject::class);
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
