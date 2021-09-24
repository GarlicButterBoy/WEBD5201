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
        if (! auth()->attempt(request(['email', 'password'])))
        {
            return back();
        }
        else
        {

        }
        

        //If passed, sign them in

        //redirect to homepage
    }


    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
