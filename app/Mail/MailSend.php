<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailSend extends Mailable
{
    use Queueable, SerializesModels;

      private $this;
      public $user;
      public $users;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
      // $this->signup=$data;
    
    }
    /**
     * Get the message envelope.
     *
     * @return $this
     */
    public function build()
    {
       // return $this->view('email.Emailt');
         return $this->subject('Mail from college campus.com')
         ->view('email.Emailt');
    }
    
}
