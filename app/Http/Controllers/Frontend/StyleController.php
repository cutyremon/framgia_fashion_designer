<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use App\Models\Style;
class StyleController extends Controller
{
    public function postStyle(Request $request){
        $style= new Style;
        $style->tittle=$request->tittle;
        $style->image=$request->image;
        $style->description=$request->description;
        $style->save();

        return view('Frontend.admin.admin');
    }
}

