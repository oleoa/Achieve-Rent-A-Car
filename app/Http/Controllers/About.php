<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class About extends Controller
{
  public function index($locale)
  {
    return $this->load('about', 'about', $locale);
  }
}
