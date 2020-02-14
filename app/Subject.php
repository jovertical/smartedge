<?php

namespace App;

class Subject extends Model
{
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
