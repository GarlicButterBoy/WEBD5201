<?php

namespace App;

use Carbon\Carbon;

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
        //     'body' => $body,
        //     'post_id' => $this->id
        // ]);

        $this->comments()->create(compact('body'));
    }

    public function user() //$post->user->name
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filter)
    {
        if ($month = $filters['month'])
        {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year'])
        {
            $query->whereYear('created_at', Carbon::parse($month)->year);
        }
    }
}


