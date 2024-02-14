<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Client\Controller;
use Illuminate\Http\Request;
use App\Helpers\AchieveAPI;

class Fleet extends Controller
{
    public function index($locale)
    {
        return redirect()->route('home', ['locale' => $locale]);
        $api = new AchieveAPI();
        $fleet = $api->fleet();
        $this->data('fleet', $fleet['fleets'][0]['groups']);
        return $this->load('client.fleet', 'fleet', $locale);
    }
}
