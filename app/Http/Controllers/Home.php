<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{

  public function index($locale)
  {
    $this->title('Home');

    $this->current('home');

    $this->locale($locale);

    return $this->load('home');
  }

}
