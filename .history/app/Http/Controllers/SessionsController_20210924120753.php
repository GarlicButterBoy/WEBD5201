<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
