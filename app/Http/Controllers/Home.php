<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Review;

class Home extends Controller
{
  public function index($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('home');
    $this->setDiscount();
    $this->createView();
    $this->data['reviews'] = Review::all();

    return view('home', $this->data);
  }
}
