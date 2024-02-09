<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Client\Controller;

class About extends Controller
{
    public function index($locale)
    {
        return $this->load('client.about', 'about', $locale);
    }
}
