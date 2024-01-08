<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Views;

class API extends Controller
{
  public function views()
  {
    $views = Views::all()->toArray();
    return $views;
  }
}
