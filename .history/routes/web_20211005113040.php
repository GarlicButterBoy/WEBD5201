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

// App::bind('App\Billing\Stripe', function() {
//     return new \App\Billing\Stripe(config('services.stripe.secret'));
// });
//$stripe = App::make('App\Billing\Stripe');
$stripe = resolve('App\Billing\Stripe');
//$stripe = app('App\Billing\Stripe');
//dd($stripe);

Route::get('/register', 'RegistrationsController@create');
Route::post('/register', 'RegistrationsController@store');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

//TASKS
// Route::get('/tasks', function () {
//     $tasks = DB::table('tasks')->get();
//     $tasks = \App\Task::all();
//     return view('tasks.index', compact('tasks'));
// });
Route::get('/tasks', 'TasksController@index'); //Replaced -> //Route::get('/tasks', function () {});
Route::get('/tasks/{task}', 'TasksController@show'); //Replaced -> //Route::get('/tasks/{task}', function ($id) {});

//POSTS
Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show'); //Replaced -> //Route::get('/tasks', function () {});

//COMMENTS
Route::post('/posts/{post}/comments', 'CommentsController@store');

//ABOUT/WELCOME PAGES
// Route::get('/', function () {
//     //$name = 'Laracasts';
//     $tasks = [
//      'Go to the store',
//      'Finish my screencast', 
//      'Clean the house'];
//     //Lesson 5, 3 ways to pass data to view 
//     //return view('welcome', ['tasks' => $tasks]);
//     return view('welcome', compact('tasks'));
//     //return view('welcome')->with('tasks', $tasks);
// });
Route::get('/about', function () {  return view('about'); });

/* Posts 
 *
 * GET /posts
 * GET /posts/create
 * 
 * POST /posts
 * 
 * GET /posts/{id}/edit
 * GET /posts/{id}
 * 
 * PATCH /posts/{id}
 * 
 * DELETE /posts/{id}
 * 
 */