<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LogoutController extends Controller
{
    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->route('home');
    }
}

