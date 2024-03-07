<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Fleet extends Controller
{
  public function index($locale)
  {
    return $this->load('fleet', 'fleet', $locale);
  }
}
