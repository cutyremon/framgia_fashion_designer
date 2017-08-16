<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Topic;
use Session;
use Auth;
use Illuminate\Support\Facades;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Database\Eloquent\Model;

class TopicController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('guest');
//    }
    public function postTopic(Request $request)
    {
        $topic = new Topic;
        $topic->topic_name = $request->topic_name;
        $topic->description = $request->description;
        $topic->image = $request->image;
        $topic->save();
        return view('frontend.admin.admin');
    }
}

