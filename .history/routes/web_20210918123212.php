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

Route::get('/', function () {

    $tasks = [
        'Finish this video',
        'Finish all of laracast to episode 16',
        'submit appropriate files'
    ];

    return view('welcome', , [
        'name' => 'World'
    ]);
});


Route::get('/about', function () {
    return view('about');
});