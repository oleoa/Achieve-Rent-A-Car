<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Client\Controller;
use Illuminate\Http\Request;

class Legal extends Controller
{
    public function terms($locale)
    {
        return $this->load('client.terms', 'terms', $locale);
    }

    public function privacy($locale)
    {
        return $this->load('client.privacy', 'privacy', $locale);
    }
}
