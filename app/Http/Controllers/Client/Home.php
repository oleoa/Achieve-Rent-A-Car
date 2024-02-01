<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Client\Controller;

class Home extends Controller
{
  public function index($locale)
  {
    return $this->load('home', $locale);
  }
}
