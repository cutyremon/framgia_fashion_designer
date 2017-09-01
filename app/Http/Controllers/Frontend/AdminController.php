<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Produces;
use App\Models\Style;
use App\Models\Topic;
use Illuminate\Http\Request;
use Session;
use Auth;
use Lang;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::User()->role == '1') {

                return view('frontend.admin.admin');
            } else {

                return view('frontend.home.homepage');
            }
        }

        return view('frontend.home.homepage');
    }

    public function postAdminProduce(Request $request)
    {
        if ($request->ad == '1') {
            $produces = Produces::all();
            $categories = Category::all();

            return view('frontend.admin.admin', compact('produces', 'categories'));
        } elseif ($request->ad == '2') {
            $styles = Style::all();

            return view('frontend.admin.admin', compact('styles'));
        } elseif ($request->ad == '3') {
            $topics = Topic::all();

            return view('frontend.admin.admin', compact('topics'));
        }
    }
}
