<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
  public function index(Request $request, $locale)
  {
    return $this->load('home', 'home', $locale, $request);
  }
  public function testing(Request $request, $locale)
  {
    return $this->load('testing', 'testing', $locale, $request);
  }
}
