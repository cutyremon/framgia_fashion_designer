<?php

namespace App\Http\Controllers;

use App\Models\Costume_Style;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Style;
use App\Models\Costume;
use App\Models\User;
use App\Models\Produces;
use App\Models\Costume_Detail;
use Illuminate\Support\Facades\Input;
use Response;
use Auth;


class DesignCostumeController extends Controller
{
    protected $topics;
    protected $styles;
    protected $produces;

    public function __construct(
        Topic $topic,
        Style $style,
        Produces $produce
    )
    {
        $this->topics = $topic;
        $this->styles = $style;
        $this->produces = $produce;
    }

    public function designCostume()
    {
        $topics = $this->topics->all();
        $styles = $this->styles->all();

        return view('frontend.users.design-costume', compact(
            'topics',
            'styles'
        ));
    }

    public function updateCostume(Request $request)
    {
        $costume = new Costume;
        $costume->user_id = User::find(Auth::user()->id)->id;
        $costume->name = $request->input('name');
        $costume->description = $request->input('description');
        $costume->average_point = '1';

        $costume->save();

        $costume_style = new Costume_Style;
        $costume_style->style_id = $request->input('style');
        $costume_style->costume_id = $costume->id;

        $costume_style->save();

//        $costume_datail = new Costume_Detail;
//        $idproduce = $request->input('costume');
//        foreach ($idproduce as $id)
//        {
//            $costume_datail->costume_id = $costume->id;
//            $costume_datail->produce_id = $id;
//        }
//
//        $costume_datail->save();

        return redirect()->back();
    }
}
