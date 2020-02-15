<?php

namespace App;

class Answer extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
