<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
         * The order instance.
         *
         * @var Request
         */

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $request;

     public function __construct($request)
     {
         $this->request = $request;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from('lpierluissi@gmail.com')
                  ->view('emails.contact')
                  
                  /*->text('mails.demo_plain')
                    ->attach(public_path('/images').'/demo.jpg', [
                            'as' => 'demo.jpg',
                            'mime' => 'image/jpeg',
                    ])*/;
    }
}
