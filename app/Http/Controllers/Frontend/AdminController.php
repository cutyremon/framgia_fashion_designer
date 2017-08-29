<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use Lang;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::User()->role == '1') {
                $categories = Category::all();

                return view('frontend.admin.admin', compact('categories'));
            } else {
                return view('frontend.home.homepage');
            }
        }

        return view('frontend.home.homepage');
    }
}
