<?php

namespace App;

class QuizAnswer extends Model
{
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
