<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    private $isAdmin = false;
    public function __construct()
    {
        session_start();

        if(isset($_SESSION['isADMINACLICE']) && $_SESSION['isADMINACLICE'])
            $this->isAdmin = true;
    }

    public function index()
    {
        return view("index", ['isAdmin' => $this->isAdmin]);
    }

    public function contact()
    {
        return view("contact");
    }

    public function about()
    {
        return view("about");
    }

    public function login()
    {
        return view("login");
    }

    public function logout()
    {
        if(isset($_SESSION['isADMINACLICE']) && $_SESSION['isADMINACLICE'])
            $_SESSION['isADMINACLICE'] = false;

        return redirect('/');
    }

    public function loginAction()
    {

        if ($_POST['username'] == "admin"
            && $_POST['password'] == "123456789") {

            $_SESSION['isADMINACLICE'] = true;
            return redirect('/dashboard');
        }
        else
            return redirect('/login');
    }
}
