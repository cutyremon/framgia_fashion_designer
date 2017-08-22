<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Topic_Style;
use App\Models\Topic;
use App\Models\Style;
use Session;
use Auth;

class Topic_StyleController extends Controller
{
    public function getTopicStyle(Request $request, $topic_id)
    {
        $new_topic = Topic::all();
        $topics = Topic::with('topic_style.style')->find($topic_id);
        $new_style = [];
        foreach ($topics->topic_style as $style) {
            $new_style[] = $style->style;
        }

        return view('frontend.style.stylepage', compact('new_style', 'new_topic'));
    }

}
