<?php

namespace App;

class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user() //$comment->user
    {
        return $this->belongsTo(User::class);
    }
}
