<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Instructions extends Controller
{
    // /[lang]/instructions?a=airport&d=airport
    public function index($locale, $arrival, $departure)
    {
      $this->setLocale($locale);
      $this->isCurrent('instructions', [$arrival, $departure]);
      $this->data['arrival'] = $arrival;
      $this->data['departure'] = $departure;
      
      return view('instructions', $this->data);
    }
}
