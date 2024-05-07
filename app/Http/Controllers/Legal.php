<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Legal extends Controller
{
  public function terms($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('terms');
    return view('terms', $this->data);
  }

  public function privacy($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('privacy');
    return view('privacy', $this->data);
  }
}
