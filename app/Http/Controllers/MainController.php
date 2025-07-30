<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MainController
{
    //
    public function index()
    {
        $latestBlog = Blog::latest()->take(3)->get();
        // dd($latestBlog);
        return view('index', compact('latestBlog'));
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
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('blog', compact('blogs'));
        // return view('blog');
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

    public function blogBraintumors()
    {
        return view('blog-brain-tumors');
    }
    public function blogSpineSurgery()
    {
        return view('blog-spine-surgery');
    }
    public function blogOpenBrainSurgery()
    {
        return view('blog-open-brain-surgery');
    }

    public function getBlog($slug)
    {
        try {
            $blog = Blog::where('blog_url', $slug)->firstOrFail();
            $recentBlogs = Blog::orderBy('created_at', 'desc')->where('id', '!=', $blog->id)->take(6)->get();
            return view('blog-details', compact('blog', 'recentBlogs'));
        } catch (ModelNotFoundException $ex) {
            return redirect('/')->with('error', 'Whoops, Blog Not Found!');
        } catch (\Exception $ex) {
            return redirect('/')->with('error', 'Whoops, Something Went Wrong from our End!');
        }
    }



    public function minimallyInvasiveSpineSurgeries()
    {
        return view('services.minimally-invasive-spine-surgeries');
    }
    public function neuroOncology()
    {
        return view('services.neuro-oncology');
    }
    public function neuroTrauma()
    {
        return view('services.neuro-trauma');
    }
    public function vascularNeurosurgery()
    {
        return view('services.vascular-neurosurgery');
    }
    public function epilepsySurgery()
    {
        return view('services.epilepsy-surgery');
    }
    public function endoscopicSkullBaseSurgery()
    {
        return view('services.endoscopic-skull-base-surgery');
    }




    public function dashboard()
    {
        return view('backend.admin.dashboard');
    }
}

