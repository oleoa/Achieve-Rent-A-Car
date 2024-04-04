<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Seats extends Controller
{
  public function index($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('seats');
    $this->setDiscount();
    $this->createView();
    return view('seats', $this->data);
  }
}
