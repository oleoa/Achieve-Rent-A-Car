<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
  
  public function index()
  {
    $this->title('Home');
    $this->current('home');
    return $this->load('home');
  }

}
