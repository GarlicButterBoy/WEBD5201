<?php

namespace App\Http\Controllers;

use App\User;
use Mail;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationForm;

class RegistrationsController extends Controller
{
    public function create()
    {
        return view ('registration.create');
    }

    public function store(RegistrationForm $request)
    {
        //Validate
        // $this->validate(request(), [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed'
        // ]);
        //Create and Save
        // $user = User::create([
        //     'name' => request('name'), 
        //     'email' => request('email'), 
        //     'password' => bcrypt(request('password'))
        // ]);
        // //Sign them in
        // auth()->login($user);

        // //Sending Emails
        // \Mail::to($user)->send(new Welcome($user));

        //Redirect
        return redirect()->home();
    }
}
