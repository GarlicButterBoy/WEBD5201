<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //Authentication attempt
        
    }


    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
