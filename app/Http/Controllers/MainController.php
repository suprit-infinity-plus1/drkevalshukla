<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\Blog;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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

    public function submitContact1(Request $request)
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
        // $cc = ['supritdagade77@gmail.com'];
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

    public function submitContact(Request $request)
    {
        // ===============================
        // 1️⃣ FORM TYPE & VALIDATION
        // ===============================
        $formType = $request->input('form_type');

        if ($formType === 'simple_contact') {

            $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'message' => 'nullable|string|max:1000',
                'website' => 'nullable', // honeypot
            ]);

            $subject = 'New Simple Contact Form Submission';

        } elseif ($formType === 'appointment_form') {

            $request->validate([
                'name' => 'nullable|string|max:255',
                'phone' => 'nullable|string|max:20',
                'gender' => 'nullable|in:male,female,other',
                'age' => 'nullable|numeric|min:0|max:150',
                'appointment_date' => 'nullable|date',
                'appointment_time' => 'nullable|date_format:H:i',
                'message' => 'nullable|string',
                'website' => 'nullable', // honeypot
            ]);

            $subject = 'New Appointment Form Submission';

        } else {

            $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'message' => 'nullable|string',
                'website' => 'nullable', // honeypot
            ]);

            $subject = 'New Contact Form Submission';
        }

        // ===============================
        // 2️⃣ HONEYPOT CHECK
        // ===============================
        if ($request->website) {
            return redirect()->route('index')
                ->with('status', 'error')
                ->with('msg', 'Bot detected.');
        }

        // ===============================
        // 3️⃣ DATA (SAFE ACCESS)
        // ===============================
        $name = $request->name ?? '-';
        $phone = $request->phone ?? '-';
        $gender = $request->gender ?? '-';
        $age = $request->age ?? '-';
        $appointment_date = $request->appointment_date ?? '-';
        $appointment_time = $request->appointment_time ?? '-';
        $message = $request->message ?? '-';

        // ===============================
        // 4️⃣ EMAIL TEMPLATE
        // ===============================
        $html = view('email', compact(
            'name',
            'phone',
            'gender',
            'age',
            'appointment_date',
            'appointment_time',
            'message',
            'formType'
        ))->render();

        // ===============================
        // 5️⃣ SEND EMAIL (PHPMailer)
        // ===============================
        try {
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 2;       // show debug output
            $mail->Debugoutput = 'error_log';
            // $mail->SMTPDebug = 2;      // show SMTP conversation
            // $mail->Debugoutput = 'html';
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = env('MAIL_PORT');

            $mail->setFrom(
                env('MAIL_FROM_ADDRESS'),
                env('MAIL_FROM_NAME')
            );

            // TO & CC
            $mail->addAddress('siddiquimahfooz327@gmail.com', 'Mahfooz');
            $mail->addCC('supritdagade77@gmail.com', 'Suprit');

            $mail->isHTML(true);
            $mail->Subject = "You Received {$subject}";
            $mail->Body = $html;
            $mail->AltBody = strip_tags($html);

            $mail->send();
            return redirect()->route('index')
            ->with('status', 'success')
            ->with('msg', 'Your message has been sent successfully!');
            
        } catch (\Exception $e) {
            
            // dd('MAIL not SENT');
            return redirect()->route('index')
                ->with('status', 'error')
                ->with('msg', 'Email sending failed.');
        }
    }

    public function sendMail()
    {
        $html = view('emails.simple-test')->render();

    Mail::send([], [], function ($message) use ($html) {

        $message->to('sanjaresolutions@gmail.com', 'Sanjare Solutions')
                ->cc('supritdagade77@gmail.com', 'Suprit')
                ->subject('You Received Test Mail')
                ->html($html)
                ->text(strip_tags($html));
    });

    return 'Mail sent successfully!';
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

    public function spineSurgery()
    {
        return view('services.spine-surgery');
    }

    public function brainSurgery()
    {
        return view('services.brain-surgery');
    }

    public function dashboard()
    {
        return view('backend.admin.dashboard');
    }
}
