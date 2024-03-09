<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Legal extends Controller
{
  public function terms($locale)
  {
    return $this->load('terms', 'terms', $locale);
  }

  public function privacy($locale)
  {
    return $this->load('privacy', 'privacy', $locale);
  }
}
