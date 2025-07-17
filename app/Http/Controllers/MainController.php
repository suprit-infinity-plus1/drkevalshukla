<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController
{
    //
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about-us');
    }

    public function service()
    {
        return view('service');
    }
    public function blog()
    {
        return view('blog-grid');
    }
}

