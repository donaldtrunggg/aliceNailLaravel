<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;

class AdminController extends Controller
{
    public function __construct()
    {
        session_start();

        if(!$_SESSION['isADMINACLICE'])
            return view('404');
    }

    public function index()
    {
        return view("admin.dashboard");
    }

    public function insert()
    {
        return view("admin.insert");
    }

    public function insertAction()
    {
        $title = $_POST['title'];
        $url = $_POST['url'];
        $category_id = $_POST['category'];
        $content =  htmlentities($_POST['ckeditor']);

        $newPost = new Post;

        $newPost->title = $title;
        $newPost->url = $url;
        $newPost->content = $content;
        $newPost->category_id = $category_id;
        $newPost->status = 0;

        $newPost->save();
    }

    public function updateList()
    {
        $posts = Post::all();
        return view("admin.update-list", ['posts' => $posts]);
    }

    public function update($slug)
    {
        $post = Post::where('url', '=', $slug)->first();

        if(!isset($post))
            return view('404');

        return view("admin.insert", ['post' => $post]);
    }

    public function updateAction($id)
    {
        $post = Post::find($id);

        $post->title = $_POST['title'];
        $post->url = $_POST['url'];
        $post->category_id = $_POST['category'];
        $post->content =  htmlentities($_POST['ckeditor']);

        $post->save();

        $posts = Post::all();
        return view("admin.update-list", ['posts' => $posts]);
    }
}
