<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CostumeController extends Controller
{
    public function getCostume(Request $request)
    {
        return view('frontend.costume.costume');
    }
}
