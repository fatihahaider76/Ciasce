<?php

namespace App\Mail;

use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public Registration $registration;

    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
    }

    public function build()
    {
        return $this
            ->from('info@ciasce.com', 'Prof. Dr. Muhammad Saleem Haider — CIASCE')
            ->replyTo('info@ciasce.com', 'CIASCE')
            ->subject('Welcome to CIASCE — Registration Received')
            ->view('emails.welcome');
    }
}
