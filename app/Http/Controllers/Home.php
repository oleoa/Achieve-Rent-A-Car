<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
  public function index($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('home');
    $this->setDiscount();
    $this->createView();
    return view('home', $this->data);
  }
}
