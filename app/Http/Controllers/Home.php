<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
  
  public function index()
  {
    $this->title('Home');
    return $this->load('home');
  }

}
