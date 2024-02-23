<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Client\Controller;
use Illuminate\Http\Request;

class Iframes extends Controller
{
    public function reviews(Request $request)
    {
        return view('iframes.reviews');
    }
}
