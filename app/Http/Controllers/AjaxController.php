<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Produces;
use App\Models\Style;
use App\Models\Topic_Style;
use Response;


class AjaxController extends Controller
{
    public function ajaxStyle($idTopic)
    {
        $styles = Topic::with('topic_style.style')->find($idTopic);

        return Response::json($styles->topic_style);
    }

    public function ajaxProduce($idProduce)
    {
        $produce = Produces::where('id', '=', $idProduce)->first();

        return Response::json($produce);
    }
}

