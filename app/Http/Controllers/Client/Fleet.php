<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Client\Controller;
use Illuminate\Http\Request;

class Fleet extends Controller
{
  public function index($locale)
  {
    return $this->load('client.fleet', 'fleet', $locale);
  }
}
