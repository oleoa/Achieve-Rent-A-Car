<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class About extends Controller
{
  public function index($locale)
  {    
    $this->title('About Us');

    $this->current('about');

    $this->locale($locale);

    return $this->load('about');
  }
}
