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

    $this->data['text'] = $locale=="pt"?"Ol%C3%A1%2C%20gostaria%20de%20alugar%20a%20viatura%20de%20":"Hello%2C%20I%20would%20like%20to%20rent%20the%20vehicle%20from%20";

    return view('fleet', $this->data);
  }
}
