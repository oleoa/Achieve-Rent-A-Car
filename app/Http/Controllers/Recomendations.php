<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class Recomendations extends Controller
{
    public function index($locale)
    {
        $this->setLocale($locale);
        $this->isCurrent('recomendations');
        $this->setDiscount();
        $this->createView();

        $pathToRecomendations = public_path('recomendations.json');
        if (File::exists($pathToRecomendations)) {
            $json = File::get($pathToRecomendations);
            $array = json_decode($json, true);
            $this->data['recomendations'] = $array;
        } else {
            $this->data['recomendations'] = [];
        }

        return view('recomendations', $this->data);
    }
}
