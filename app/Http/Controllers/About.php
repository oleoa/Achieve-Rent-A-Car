<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class About extends Controller
{
  public function index($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('about');
    return view('about', $this->data);
  }
}
