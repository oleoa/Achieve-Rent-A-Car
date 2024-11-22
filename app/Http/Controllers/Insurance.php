<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Insurance extends Controller
{
    public function insurance($locale, $vehicle)
    {
        $this->setLocale($locale);
        $vehicle = strtoupper($vehicle);
        $this->data['vehicle'] = $vehicle;
        return view('insurance', $this->data);
    }
}
