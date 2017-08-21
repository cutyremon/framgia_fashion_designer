<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use Auth;

class DataComposer
{
    protected $category;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository
     * @return void
     */
    public function __construct(
        Category $category
    ){
        $this->category = $category;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        if (Schema::hasTable($this->category->getTable())) {
            $categories = $this->category->get();
            $view->with('categories', $categories);
        }
    }
}

