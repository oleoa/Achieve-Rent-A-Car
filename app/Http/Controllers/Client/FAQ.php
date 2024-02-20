<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Client\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ as FAQModel;

class FAQ extends Controller
{
    public function index($locale)
    {
        $faq = FAQModel::all()->toArray();
        $this->data('faq', $faq);
        return $this->load('client.faq', 'faq', $locale);
    }
}
