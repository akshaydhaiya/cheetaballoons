<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
   
    
    public function __construct($data)
    {
        $this->data = $data;
    }

    
    public function build()
    {
        $address = $this->data['email'];
        $subject = $this->data['subject'];
        $name = $this->data['name'];

        return $this->view('emails.test')
                    ->from($address, $name)
                    ->cc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([ 'test_message' => $this->data['message']])
                    ->with([ 'test_name' => $this->data['name']])
                    ->with([ 'test_email' => $this->data['email']]);



    }
}
