<?php
/**
 * Created by PhpStorm.
 * User: Hoangduy
 * Date: 04/08/2017
 * Time: 02:53 CH
 */
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produces;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $category;
    protected $produce;

    public function __construct(Category $category, Produces $produce) {
        $this->category = $category;
        $this->produce = $produce;
    }

    public function category(Request $request) {
        $categories = $this->category->get();
        $produces = $this->produce->where('category_id', '=', $request->produce)->get();

        return view('frontend.categories.category', compact('categories', 'produces'));
    }
}
