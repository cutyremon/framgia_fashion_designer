<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Style;

class CommentController extends Controller
{
    protected $style;
    protected $comment;

    public function __construct(
        Style $style,
        Comment $comment
    ) {
        $this->style = $style;
    }


    public function postComment(Request $request)
    {
        $listStyle = $this->style->get();
        $listComment = $this->comment->get();

        return view('frontend.style.stylepage', compact(['listStyle', 'listComment']));
    }
}
