<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
    }

    public function index($slug)
    {
        $post = Post::where('url', '=', $slug)->first();

        if(!isset($post))
            return view('404');

        $category = $post->category;
        if(isset($category))
            $locationTitle = $category->name . ' \\ ' . $post->title;

        return view('post-detail', ['post' => $post, 'locationTitle' => $locationTitle]);
    }
}
