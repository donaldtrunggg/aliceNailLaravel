<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
    }

    public function index($slug)
    {
        $category = Category::where('slug', '=', $slug)->first();
        $posts = $category->posts;
        return view('post-list', ['posts' => $posts, 'category' => $category]);
    }
}
