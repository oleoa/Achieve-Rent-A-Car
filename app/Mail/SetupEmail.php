<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SetupEmail extends Mailable
{
  use Queueable, SerializesModels;

  public $verificationLink;

  public function __construct($verificationLink)
  {
    $this->verificationLink = $verificationLink;  
  }

  public function build()
  {
    return $this->view('emails.setup')->subject('Setup your account');
  }
}
