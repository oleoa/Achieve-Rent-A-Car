<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class API extends Controller
{
  public function translation(Request $request)
  {
    return ['yes'];
  }
}
