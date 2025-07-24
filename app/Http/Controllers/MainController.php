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

    public function services()
    {
        return view('services');
    }
    public function singleService()
    {
        return view('single-service');
    }
    public function staff()
    {
        return view('staff');
    }
    public function blog()
    {
        return view('blog');
    }
    public function singlePostPage()
    {
        return view('single-post-page');
    }
    public function appointment()
    {
        return view('appointment');
    }
    public function contact()
    {
        return view('contact');
    }


    public function minimallyInvasiveSpineSurgeries()
    {
        return view('minimally-invasive-spine-surgeries');
    }




    public function dashboard()
    {
        return view('backend.admin.dashboard');
    }
}

