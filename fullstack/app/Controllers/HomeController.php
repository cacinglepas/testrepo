<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return view("pages/home.php");
    }
    
    public function blog()
    {
        return view('pages/blog.php');
    }

    public function event()
    {
            return view('pages/event.php');
    }

    public function service()
    {
            return view('page/service.php');
    }

    public function team()
    {
            return view('pages/team.php');
    }

    public function contact()
    {
            return view('pages/contact.php');
    }
}
