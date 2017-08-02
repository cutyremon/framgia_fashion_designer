<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Style;
use App\Models\User;

class HomeController extends Controller
{
    protected $topic;
    protected $style;
    protected $user;

    public function __construct(Topic $topic, Style $style, User $user) {
        $this->topic = $topic;
        $this->style = $style;
        $this->user = $user;
    }

    public function home() {
        $topics = $this->topic->orderBy('id', 'desc')->take(3)->get();
        $styles = $this->style->take(8)->get();
        $users = $this->user->where('id', '!=', 1)->take(3)->get();

        return view('frontend.home.homepage', compact("topics","users", "styles"));
    }
}

