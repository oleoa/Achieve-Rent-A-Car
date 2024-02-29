<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Client\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(Request $request, $locale)
    {
        return $this->load('client.home', 'home', $locale);
    }
}
