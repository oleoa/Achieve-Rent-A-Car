<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Views;

class API extends Controller
{
  private String $key;

  public function __construct()
  {
    $this->key = env('API_KEY');
  }

  public function views(Request $request)
  {
    $keySent = $request->input('key');
    if ($keySent != $this->key) return response()->json(['error' => 'Invalid key'], 401); 
    return Views::all()->toArray();
  }
}
