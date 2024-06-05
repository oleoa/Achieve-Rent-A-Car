<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Fleet extends Controller
{
  public function index($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('fleet');

    $path = public_path('files/fleet.json');
    if(file_exists($path)) {
      $fleet = file_get_contents($path);
      $fleet = json_decode($fleet, true);
    } else {
      $fleet = [];
    }
    $this->data['fleet'] = $fleet;

    return view('fleet', $this->data);
  }
}
