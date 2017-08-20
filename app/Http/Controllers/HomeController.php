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
use App\Models\Category;

class HomeController extends Controller
{

    protected $topic;
    protected $style;
    protected $user;
    protected $category;

    public function changeLanguage($lang)
    {
        HelpText::changeLanguage_1($lang);
        return redirect()->back();
    }

    public function __construct(
        Topic $topic,
        Style $style,
        User $user,
        Category $category
    ) {
        $this->topic = $topic;
        $this->style = $style;
        $this->user = $user;
        $this->category = $category;
    }

    public function home()
    {
        $topics = $this->topic->orderBy('id', 'desc')->take(3)->get();
        $styles = $this->style->take(8)->get();
        $users = $this->user->where('id', '!=', 1)->take(3)->get();
        $categories = $this->category->get();

        return view('frontend.home.homepage', compact('topics', 'users', 'styles', 'categories'));
    }
}

