<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Legal extends Controller
{
    public function terms($locale)
    {
        $this->current('terms');
        $this->locale($locale);
        return $this->load('terms');
    }

    public function privacy($locale)
    {
        $this->current('privacy');
        $this->locale($locale);
        return $this->load('privacy');
    }
}
