<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Seats extends Controller
{
  public function index($locale)
  {
    return $this->load('seats', 'seats', $locale);
  }
}
