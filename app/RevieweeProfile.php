<?php

namespace App;

class RevieweeProfile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
