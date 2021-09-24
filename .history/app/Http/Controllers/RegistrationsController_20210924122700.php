<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationsController extends Controller
{
    public function create()
    {
        return view ('registration.create');
    }

    public function store()
    {
        //Validate
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        //Create and Save
        $user = User::create([
            'name' => request('name'), 
            'email' => request('email'), 
            'password' => request]);
        //Sign them in
        auth()->login($user);
        //Redirect
        return redirect()->home();
    }
}
