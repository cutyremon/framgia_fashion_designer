<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Style;
use Auth;

class DesignCostumeController extends Controller
{
    protected $topics;
    protected $styles;

    public function __construct(Topic $topic, Style $style)
    {
        $this->topics= $topic;
        $this->styles = $style;
    }

    public function designCostume()
    {
        $topics = $this->topics->all();
        $styles = $this->styles->all();

        return view('frontend.users.design-costume', compact('topics', 'styles'));
    }
}

