<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Home extends Controller
{
  /*
    curl -X POST \
    https://api.instagram.com/oauth/access_token \
    -F client_id=1616753755797368 \
    -F client_secret=515eb55f76e9a8c0b2e3538e77a1326f \
    -F grant_type=authorization_code \
    -F redirect_uri=https://achieverentacar.com/en \
    -F code=AQCdp5IcDIDyt1J0L9qr_VCNqjwHAP5cAsrpIHrDch-FEN8Hjt9EgfNBwykdvm1OJ68NY5MC5NdDEWUKF0jZbhybrjFqZ7jzqzTD4ILXzWInqT1q5TVRbYGkea3eHKlHxepC4R-LKWC1HdVSyyONGkukvqdykMebBfPsz7Gj4mzJ16NmUTjtau6F23UMJ7zbIdvxrlbfuodlSYayoPcf0eLS1A7cDi8hjKIgHTSd1Yd0TQ
  */
  public function index($locale)
  {
    $response = Http::get('https://graph.instagram.com/me/media?fields=media_url,caption&access_token=IGQWRNdERydHlCbHBLMnlFcWRDSzc3LWZASVXZA4bEd3V1ljalBGRE85VE52T1JTaEx3YTNNMXh6aXYyY18zVHNlYmgxbHRQZAUtMUTNfcUh3bnpDT3p2QW5GZAlRPbFlZAM3NrTXBROWRxbkxKQUsxNEtNb2RYX0JsNTBUNzVLdVdwa25pUQZDZD');

    $data = $response->json();
    dd($data);

    $images = [];
    foreach($data['data'] as $key => $value) {
      $images[] = $value['media_url'];
    }

    $this->data('images', $images);
    $this->title('Home');
    $this->current('home');
    $this->locale($locale);
    return $this->load('home');
  }

}
