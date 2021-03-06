<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Repositories\Tags;
use Carbon\Carbon;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {

    	$posts = $tag->posts;

    	return view('posts.index', compact('posts'));

    }
}