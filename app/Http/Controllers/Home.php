<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Home extends Controller
{
  public function index($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('home');
    
    $path = public_path('files/reviews.json');
    if(file_exists($path)) {
      $reviews = file_get_contents($path);
      $reviews = json_decode($reviews, true);
    } else {
      $reviews = [];
    }
    $this->data['reviews'] = $reviews;

    $compareOrder = function($a, $b) {
      return $a['order'] - $b['order'];
    };
  
    usort($this->data['reviews'], $compareOrder);
    
    return view('home', $this->data);
  }

  public function anyrent($locale)
  {
    $this->setLocale($locale);
    $this->isCurrent('booking');
    return view('booking', $this->data);
  }

  public function booking(Request $request, $locale)
  {
    $this->validate($request, [
      'id' => 'required'
    ]);

    $data = $request->all();

    $response = Http::post('https://my-api-production-a7ab.up.railway.app/add', [
      'id' => $data['id'],
    ]);

    return redirect()->back()->with('success', 'Reservation Added');
  }

  public function vehicles(Request $request, $locale)
  {
    $response = Http::get('https://my-api-production-a7ab.up.railway.app/vehicles');

    return redirect()->back()->with('success', 'Vehicles Km updated');
  }
}
