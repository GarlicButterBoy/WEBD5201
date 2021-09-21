<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() 
    {
        
        //$tasks = DB::table('tasks')->get();
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function show()
    {
        //$task = DB::table('tasks')->find($id);
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }
}
