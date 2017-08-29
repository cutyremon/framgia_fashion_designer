<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produces;
use App\Models\Category;

class SearchController extends Controller
{
    protected $keyword;
    protected $category;
    protected $produce;

    public function __construct(
        Category $category,
        Produces $produce
    )
    {
        $this->category = $category;
        $this->produce = $produce;
    }

    public function allSearch(Request $request)
    {
        $keyword = $request->input('keyword');
        $current_category = $request->category;

        $listProduce = $this->produce
            ->filterByRequest($request)
            ->paginate(12)
            ->withPath('/category/' . $current_category);

        $categories = $this->category->get();

        return view('frontend.search.view_search', compact(
            'listProduce',
            'keyword',
            'current_category',
            'categories'
        ));
    }

    public function searchCostume($idCategory)
    {
        $listProduce = $this->produce
            ->where('category_id', '=', $idCategory)
            ->paginate(12);

        return view('frontend.search.searchCostume', compact('listProduce'));
    }
}

