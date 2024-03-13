<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
  public function index(Request $request, $locale)
  {
    return $this->load('home', 'home', $locale);
  }
  public function index_pt(Request $request, $locale)
  {
    return $request->getHttpHost();
    return $this->load('home_pt', 'home', $locale);
  }
}
