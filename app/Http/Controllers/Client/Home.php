<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Client\Controller;
use App\Helpers\AchieveAPI;

class Home extends Controller
{
    public function index($locale)
    {
        return $this->load('client.home', 'home', $locale);
    }
}
