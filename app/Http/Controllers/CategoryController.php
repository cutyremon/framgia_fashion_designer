<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produces;
use App\Models\Category;

class CategoryController extends Controller
{
    protected $category;
    protected $produce;

    public function __construct(
        Category $category,
        Produces $produce
    ) {
        $this->category = $category;
        $this->produce = $produce;
    }

    public function category(Request $request)
    {
        $categories = $this->category->get();
        $current_category = $request->id;

        return view('frontend.categories.category', compact('categories', 'current_category'));
    }
}

