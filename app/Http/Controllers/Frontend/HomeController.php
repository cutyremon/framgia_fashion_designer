<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Style;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\HelpText;
use Session;
use Auth;
use Lang;
use Closure;
use Illuminate\Support\Facades;
use App\Http\Middleware\Locale;

class HomeController extends Controller
{

    protected $topic;
    protected $style;
    protected $user;

//    public function changeLanguage(Request $request)
//    {
//        $lang = $request->language;
//
//        $language = 'vn';
//        if ($lang == 'en') {
//            $language = 'en';
//        }
//
//        Locale::setLanguage($language);
//
//        return redirect()->back();
//    }
//    public
//    static function setLanguage($lang)
//    {
//        Session::put('language', $lang);
//    }
//
//    public function changeLanguage($lang)
//    {
//        if ($lang == 'en') {
//            $language = 'en';
//        }
//        else {$language='vn';}
//
//
//        self::setLanguage($language);
//
//
//        return redirect()->back();
//    }
    public function changeL($lang)
    {
        HelpText::changeLanguage_1($lang);
        return redirect()->back();
    }

    public function __construct(Topic $topic, Style $style, User $user)
    {
        $this->topic = $topic;
        $this->style = $style;
        $this->user = $user;
    }

    public function home()
    {
        $topics = $this->topic->orderBy('id', 'desc')->take(1)->get();
        $styles = $this->style->take(8)->get();
        $users = $this->user->where('id', '!=', 1)->take(3)->get();

        return view('frontend.home.homepage', compact("topics", "users", "styles"));
    }
}

