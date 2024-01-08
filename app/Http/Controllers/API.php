<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Views;

class API extends Controller
{
  public function index()
  {
    $views = Views::all()->toArray();
    dd($views);
    return [1,2,3];
  }
}
