<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class Home extends Controller
{
  public function index($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('home');
    $this->setDiscount();
    $this->createView();

    $pathToReviews = public_path('reviews.json');
    if (File::exists($pathToReviews)) {
      $jsonReviews = File::get($pathToReviews);
      $arrayReviews = json_decode($jsonReviews, true);
      $this->data['reviews'] = $arrayReviews;
    } else {
      $this->data['reviews'] = [];
    }

    return view('home', $this->data);
  }
}
