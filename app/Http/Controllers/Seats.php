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
    return view('seats', $this->data);
  }
}
