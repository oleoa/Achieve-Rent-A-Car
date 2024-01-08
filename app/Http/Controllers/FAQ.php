<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQ extends Controller
{
  public function index($locale)
  {    
    $this->title('FAQ');

    $this->current('faq');

    $this->locale($locale);

    return $this->load('faq');
  }
}
