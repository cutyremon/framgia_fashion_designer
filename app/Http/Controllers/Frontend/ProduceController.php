<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produces;
use App\Helpers\HelpText;
use Auth;
use Session;
use Response;
use hash;
use Validator;

class ProduceController extends Controller
{
    public function postProduce(Request $request)
    {
        $produce = new Produces;
        $produce->produce_name = $request->produce_name;
        $produce->description = $request->description;
        $produce->price = $request->price;
        $produce->gender = $request->gender;
        $produce->color = $request->color;
        $produce->category_id = $request->category_id;
        $path = $request->file('image')->store('upload/produce/image', 'uploads');
        $produce->image = $path;

        $produce->save();

        return redirect()->back();
    }
}

