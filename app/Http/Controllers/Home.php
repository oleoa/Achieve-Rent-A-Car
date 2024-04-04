<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class Home extends Controller
{
  public function index($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('home');
    $this->setDiscount();
    $this->createView();
    $this->data['reviews'] = json_decode(File::get(public_path('reviews.json')), true);
    
    return view('home', $this->data);
  }
}
