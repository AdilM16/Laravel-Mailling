<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $contenuMail)
    {
        $this->data = $contenuMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('adilmohamedmohamed97@gmail.com')
                    ->subject('Objet Test')
                    ->view('emails.test')
                    ->attachFromStorage('img/onizuka.jpg');
    }
}
