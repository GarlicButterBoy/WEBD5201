<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store()
    {
        
        //Create a new post
        //$post = new Post;
        //$post->title = request('title');
        //$post->body = request('body');
        //Save to DB
        //$post->save();
        //Post::create([ 'title' => request('title'), 'body' => request('body') ]);
        
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);



        Post::create(request(['title', 'body']));
        //Redirect to the home page
        return redirect('/');
    }
}
