<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Review;

class Home extends Controller
{
  public function index($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('home');
    $this->data['reviews'] = Review::all()->toArray();

    $compareOrder = function($a, $b) {
      return $a['order'] - $b['order'];
    };
  
    usort($this->data['reviews'], $compareOrder);
    
    return view('home', $this->data);
  }
}
