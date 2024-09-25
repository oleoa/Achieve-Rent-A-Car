<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Videos extends Controller
{
    public function index($locale, $name)
    {
      $this->setLocale($locale);
      $this->isCurrent('videos', ["name" => $name]);
      $this->data['video'] = strtoupper($name);
      return view('videos', $this->data);
    }
}
