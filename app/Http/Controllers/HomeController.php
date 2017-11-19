<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view("index");
    }

    public function contact()
    {
        return view("contact");
    }

    public function about()
    {
        return view("about");
    }
}
