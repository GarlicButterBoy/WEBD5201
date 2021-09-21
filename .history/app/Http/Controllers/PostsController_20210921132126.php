<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show()
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
        $post = new Post;

        $post->title = request()
        //Save to DB

        //Redirect to the home page
       // return view('posts.create');
    }

}
