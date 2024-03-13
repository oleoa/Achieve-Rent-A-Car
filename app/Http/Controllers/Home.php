<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
  public function index(Request $request, $locale)
  {
    return $this->load('home', 'home', $locale);
  }
  public function index_pt(Request $request, $locale)
  {
    $out1 = "achieverentacar.com";
    $out2 = "achieverentacar.pt";
    $out3 = "www.achieverentacar.com";
    $out4 = "www.achieverentacar.pt";

    $domain = $request->getHttpHost();

    $domain = explode('.', $domain);
    $domain = $domain[count($domain)-1];
    return $domain;

    return $this->load('home_pt', 'home', $locale);
  }
}
