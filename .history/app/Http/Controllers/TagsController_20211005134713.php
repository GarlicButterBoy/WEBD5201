<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\Posts;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function index(Tag $tag)
    {

    	$posts = $tag->posts;

    	return view('posts.index', compact('posts'));

    }
}