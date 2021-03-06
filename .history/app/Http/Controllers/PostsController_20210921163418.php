<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();


        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

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
