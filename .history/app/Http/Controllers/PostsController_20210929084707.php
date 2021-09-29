<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth', ['except' => 'index', 'show']);
    }

    public function index()
    {
        //$posts = \App\Post::all();
        //latest() IS EQUIVALENT TO orderBy('created_at', 'desc')
        //$posts = Post::latest()->get();
        // $posts = Post::latest();
        // if ($month = request('month'))
        // {
        //     $posts->whereMonth('created_at', Carbon::parse($month)->month);
        // }
        // if ($year = request('year'))
        // {
        //     $posts->whereYear('created_at', Carbon::parse($month)->year);
        // }
        // $posts = $posts->get();
            
        $posts = Post::latest()
        ->filter(request(['month']))


        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();

        


        return view('posts.index', compact('posts', 'archives'));
    }

    public function show(Post $post)
    {
        //$post = Post::find($post);
        return view('posts.show', compact('post'));
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


        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );
        // Post::create([
        //     'title' => request('title'), 
        //     'body' => request('body'), 
        //     'user_id' => auth()->id()
        // ]);
        //Redirect to the home page
        return redirect('/');
    }



}
