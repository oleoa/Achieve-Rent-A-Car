<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Dashboard\Controller;
use Illuminate\Http\Request;

class Seats extends Controller
{
    public function index($locale)
    {
        return $this->load('seats', $locale);
    }
}
