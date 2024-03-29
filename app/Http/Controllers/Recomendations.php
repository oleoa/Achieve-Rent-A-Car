<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Recomendations extends Controller
{
    public function index($locale)
    {
        $this->setLocale($locale);
        $this->isCurrent('recomendations');
        $this->setDiscount();
        $this->createView();
        return view('recomendations', $this->data);
    }
}
