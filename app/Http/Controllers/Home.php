<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Home extends Controller
{

  public function index($locale)
  {
    $response = Http::get('https://graph.instagram.com/me/media?fields=media_url,caption&access_token=IGQWRNdERydHlCbHBLMnlFcWRDSzc3LWZASVXZA4bEd3V1ljalBGRE85VE52T1JTaEx3YTNNMXh6aXYyY18zVHNlYmgxbHRQZAUtMUTNfcUh3bnpDT3p2QW5GZAlRPbFlZAM3NrTXBROWRxbkxKQUsxNEtNb2RYX0JsNTBUNzVLdVdwa25pUQZDZD');

    // Get the response body as a string
    $body = $response->body();

    // If you want to work with the response data as JSON, you can decode it
    $data = $response->json();
    
    dd($data);

    $this->title('Home');
    $this->current('home');
    $this->locale($locale);
    return $this->load('home');
  }

}
