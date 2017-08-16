<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produces;
use Auth;
use Session;

class ProduceController extends Controller
{
    public function postProduce(Request $request)
    {
        $produce = new Produces;
        $produce->produce_name = $request->produce_name;
        $produce->description = $request->description;
        $produce->image = $request->image;
        $produce->price = $request->price;
        $produce->save();

        return view('Frontend.admin.admin');
    }
    //
}

