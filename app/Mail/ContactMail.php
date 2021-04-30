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
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$subject,$message){
        $this->name=$name;
        $this->sub=$subject;
        $this->mess=$message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        $email_name=$this->name;
        $email_sub=$this->sub;
        $email_mess=$this->mess;
        return $this->view('admin.newsletter.contact',compact('email_name','email_mess'))->subject('email_sub');
    }
}
