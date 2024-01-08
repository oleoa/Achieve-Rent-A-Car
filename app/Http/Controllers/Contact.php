<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contact extends Controller
{
  public function index($locale)
  {    
    $this->title('Contact Us');

    $this->current('contact');

    $this->locale($locale);

    return $this->load('contact');
  }
}
