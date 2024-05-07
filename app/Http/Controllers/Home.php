<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Home extends Controller
{
  public function index($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('home');
    
    $path = public_path('files/reviews.json');
    if(file_exists($path)) {
      $reviews = file_get_contents($path);
      $reviews = json_decode($reviews, true);
    } else {
      $reviews = [];
    }
    $this->data['reviews'] = $reviews;

    $compareOrder = function($a, $b) {
      return $a['order'] - $b['order'];
    };
  
    usort($this->data['reviews'], $compareOrder);
    
    return view('home', $this->data);
  }
}
