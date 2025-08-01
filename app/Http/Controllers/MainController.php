<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Blog;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Mail\ContactMessage;

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

    public function submitContact(Request $request)
    {
        $formType = $request->input('form_type');

        if ($formType === 'simple_contact') {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'message' => 'nullable|string',
            ]);
            $subject = 'New Simple Contact Form Submission';
        } elseif ($formType === 'appointment_form') {
            $validated = $request->validate([
                'name' => 'nullable|string|max:255',
                'phone' => 'nullable|string|max:20',
                'gender' => 'nullable|in:male,female,other',
                'age' => 'nullable|numeric|min:0|max:150',
                'appointment_date' => 'nullable|date',
                'appointment_time' => 'nullable|date_format:H:i',
                'message' => 'nullable|string',
            ]);
            $subject = 'New Appointment Form Submission';
        } else {
            // fallback validation if form_type missing or unknown
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'message' => 'nullable|string',
            ]);
            $subject = 'New Contact Form Submission';
        }


        // Load email recipients from .env
        // $to = env('MAIL_TO_ADDRESS');
        // $cc = array_filter(explode(',', env('MAIL_CC_ADDRESS')));
        // $bcc = array_filter(explode(',', env('MAIL_BCC_ADDRESS')));
            $to = 'keval242@gmail.com';
    $cc = ['sanjaresolutions@gmail.com'];
    $bcc = ['contact@drkevalshukla.com'];
        
        // Log email data for debugging (optional)
        \Log::info('Sending Contact Email', [
            'to' => $to,
            'cc' => $cc,
            'bcc' => $bcc,
            'data' => $validated,
            'subject' => $subject,
        ]);

        // Check if at least one recipient is available
        if (empty($to) && empty($cc) && empty($bcc)) {
            \Log::error('Email not sent: No recipient (To, CC, or BCC) configured.');
            return redirect()->back()->withErrors(['error' => 'Email could not be sent. No recipient configured.']);
        }

        // Send the email
        Mail::to($to ?: [])
            ->cc($cc)
            ->bcc($bcc)
            ->send(new ContactMessage($validated, $subject));

        return redirect()->back()->with('success', 'Message sent successfully!');
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

