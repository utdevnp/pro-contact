<?php

namespace Utdevnp\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $fullname;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $fullname)
    {
        $this->name = $fullname;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::mail.contact-mailable')->with(["message"=>$this->message, "name"=>$this->name]);
    }
}
