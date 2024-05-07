<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Fleet extends Controller
{
  public function index($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('fleet');
    return view('fleet', $this->data);
  }
}
