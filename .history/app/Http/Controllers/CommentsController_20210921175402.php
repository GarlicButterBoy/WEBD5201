<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store()
    {
        
        
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);



        Post::create(request(['title', 'body']));
        //Redirect to the home page
        return redirect('/');
    }
}
