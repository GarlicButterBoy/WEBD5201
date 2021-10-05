<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Welcome;

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
            'password' => bcrypt(request('password'))
        ]);
        //Sign them in
        auth()->login($user);

        //Sending Emails
        Mail::to($user)->send(new Welcome($user));

        //Redirect
        return redirect()->home();
    }
}
