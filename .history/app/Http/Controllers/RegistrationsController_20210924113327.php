<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationsController extends Controller
{
    public function create()
    {
        return view ('sessions.create');
    }

    public function store()
    {
        //Validate
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //Create and Save
        User::create(request(['name', 'email', 'password']));
        //Sign them in
        Auth::login();
        //Redirect
        return view ('sessions.create');
    }
}
