<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $subjectLine;

    public function __construct(array $data, $subjectLine = 'New Form Submission')
    {
        $this->data = $data;
        $this->subjectLine = $subjectLine;
    }

    public function build()
    {
        return $this->subject($this->subjectLine)
                    ->view('emails.contact');
    }
}