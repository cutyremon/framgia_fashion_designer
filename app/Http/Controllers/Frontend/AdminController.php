<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Helpers\HelpText;
use Session;
use Auth;
use Lang;
use Closure;
use Illuminate\Support\Facades;
use App\Models\User;

class AdminController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function postAdmin()
    {
        if (Auth::check()) {

//        $data = [
//            'email' => $request->email,
//            'password' => $request->password,
//            'role' => $request->role
//        ];
            if (Auth::User()->role == '1') {
//        if (Auth::attempt([$data.role => '1'])) {
                return view('frontend.admin.admin');
            } else return view('frontend.home.homepage');
        }
        return view('frontend.home.homepage');
    }
}

