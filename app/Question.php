<?php

namespace App;

class Question extends Model
{
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
