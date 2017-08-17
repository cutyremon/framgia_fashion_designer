<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;

class ProfileController extends Controller
{
    protected $category;
    protected $user_information;

    public function __construct(
        Category $category,
        User $user_information
    ) {
        $this->category = $category;
        $this->user_information = $user_information;
    }

    public function profile()
    {
        $user = $this->user_information->get();
        $categories = $this->category->get();

        return view('frontend.profile.user_profile', compact('categories', 'user'));
    }
}
