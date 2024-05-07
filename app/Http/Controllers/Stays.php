<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stays extends Controller
{
    public function index($locale)
    {
        $this->setLocale($locale);
        $this->isCurrent('stays');
        return view('stays', $this->data);
    }
}
