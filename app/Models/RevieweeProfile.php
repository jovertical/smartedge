<?php

namespace App\Models;

class RevieweeProfile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
