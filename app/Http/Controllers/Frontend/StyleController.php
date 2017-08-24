<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Topic_Style;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use App\Models\Style;
use App\Models\Topic;

class StyleController extends Controller
{
    public function getStyle(Request $request)
    {
        $new_topic = Topic::all();
        $new_style = Style::all();

        return view('frontend.style.stylepage', compact('new_style', 'new_topic'));
    }

    public function postStyle(Request $request)
    {
        $style = new Style;
        $style->tittle = $request->tittle;
        $style->image = $request->image;
        $style->description = $request->description;
        $style->save();

        return view('Frontend.admin.admin');
    }
}

