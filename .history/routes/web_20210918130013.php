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

Route::get('/tasks', function () {

    $tasks = DB::table('tasks')->get();

    return view('welcome', compact('tasks'), [
        'name' => 'World'
    ]);
});

Route::get('/tasks/{task}', function ($id) {

    

    $tasks = DB::table('tasks')->find($id);

    dd($tasks);

    return view('welcome', compact('tasks'), [
        'name' => 'World'
    ]);
});



Route::get('/about', function () {
    return view('about');
});

