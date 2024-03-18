<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Contact as ContactMail;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
  public function index($locale)
  {
    return $this->load('contact', 'contact', $locale);
  }

  public function send(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email',
      'phone' => 'required',
      'message' => 'required'
    ]);

    $data = $request->all();
    
    Mail::to(env('MAIL_USERNAME'))->send(new ContactMail($data));
    Mail::to(env('MY_MAIL'))->send(new ContactMail($data));

    return redirect()->back()->with('success', 'Message-ContactSent');
  }
}
