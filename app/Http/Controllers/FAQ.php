<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FAQ extends Controller
{
  public function index($locale)
  {
    $path = public_path('files/faq.json');
    if(file_exists($path)) {
      $faq = file_get_contents($path);
      $faq = json_decode($faq, true);
    } else {
      $faq = [];
    }
    $this->data['faq'] = $faq;
    $this->setLocale($locale);
    $this->isCurrent('faq');
    return view('faq', $this->data);
  }
}
