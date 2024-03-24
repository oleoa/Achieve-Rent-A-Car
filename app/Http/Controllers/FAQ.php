<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ as FAQModel;

class FAQ extends Controller
{
  public function index($locale)
  {
    $faq = FAQModel::all()->toArray();
    $this->data['faq'] = $faq;
    $this->setLocale($locale);
    $this->isCurrent('faq');
    $this->setDiscount();
    $this->createView();
    return view('faq', $this->data);
  }
}
