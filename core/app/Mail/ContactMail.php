<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $sender;
    public $subject;
    public $text;
    public $subsc;
    public $pdf;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($from, $subject, $message, $pdf, $subsc=false)
    {
        $this->sender = $from;
        $this->subject = $subject;
        $this->text = $message;
        $this->subsc = $subsc;
        $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //  dd($this->pdf);
        if($this->pdf != [])
        {
             $try=$this->from($this->sender)
        ->subject($this->subject)
        ->view('mail.contact');

        foreach ($this->pdf as $value)
        {
            $try->attach($value);
        }



        return $try;
        }
        else
        {
             return $this->from($this->sender)
        ->subject($this->subject)
        ->view('mail.contact');
        }
    }
}
