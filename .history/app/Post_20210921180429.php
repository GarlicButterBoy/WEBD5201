<?php

namespace App;

class Post extends Model
{
    //protected $fillable = ['title', 'body']; //Specify fields we want to be allowed
    //protected $guarded = []; //Specify fields we DONT want to allow


    public function comments()
    {
       return $this->hasMany(Comment::class);
       //return $this->hasMany('\App\Comment');
    }

    public function addComment($body)
    {
        // Comment::create([
        //     'body' => request('body'),
        //     'post_id' => $post->id
        // ]);
    }
}


