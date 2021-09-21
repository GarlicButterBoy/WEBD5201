<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Task;
use App\Post;

Route::get('/tasks', 'TasksController@index'); //Replaced -> //Route::get('/tasks', function () {});

Route::get('/tasks/{task}', 'TasksController@show'); //Replaced -> //Route::get('/tasks/{task}', function ($id) {});


Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
//Route::get('/posts/{post}', 'PostsController@show'); //Replaced -> //Route::get('/tasks', function () {});

//Route::get('/about', function () {  return view('about'); });

/* POSTS
 *
 * GET /posts
 * GET /posts/create
 * 
 * POST /posts
 * 
 * GET /posts/{id}/edit
 * PATCH /posts/{id}
 * 
 * PATCH /posts/{id}
 */