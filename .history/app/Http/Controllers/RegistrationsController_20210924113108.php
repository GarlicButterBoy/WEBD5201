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

        //Create and Save

        //Redirect
        return view ('sessions.create');
    }
}
