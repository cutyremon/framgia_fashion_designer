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
        $new_style_1 = Style::all();

        return view('frontend.style.stylepage', compact('new_style', 'new_topic','new_style_1'));
    }

    public function postStyle(Request $request)
    {
        $style = new Style;
        $style->tittle = $request->tittle;
        $style->description = $request->description;
        $path = $request->file('image')->store('upload/style/image', 'uploads');
        $style->image = $path;
        $style->save();

        return view('Frontend.admin.admin');
    }
}
