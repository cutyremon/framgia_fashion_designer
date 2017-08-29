<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Style;
use App\Models\Costume;
use App\Models\Produces;
use App\Models\Costume_Detail;


class DesignCostumeController extends Controller
{
    protected $topics;
    protected $styles;
    protected $produces;

    public function __construct(
        Topic $topic,
        Style $style,
        Produces $produce
    ) {
        $this->topics= $topic;
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

    public function updateProduce()
    {
        return redirect()->route('user.design');
    }

//    public function updateCostume(Request $request)
//    {
//
//        return redirect()->route('user.design');
//    }
}

