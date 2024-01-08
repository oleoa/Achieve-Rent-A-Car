<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class API extends Controller
{
  public function index()
  {
    return [1,2,3];
  }
}
