<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, ValidatesRequests;

  protected Array $data = array();

  protected function isCurrent(String $current, Array $data = []): void
  {
    $this->data['current']['url'] = $current;
    $this->data['current']['data'] = $data;
  }

  protected function setLocale(String $locale): void
  {
    $localeExists = in_array($locale, ['en', 'pt'])? true : false;
    if(!$localeExists) abort(404);
    $this->data['locale'] = $locale;
    app()->setLocale($this->data['locale']);
    
    // $this->data['discount'] = array(
    //   "text" => "Free baby seats | Book now!",
    //   "texto" => "Cadeiras para bebés gratuitas | Reserve já",
    //   "text_mobile" => "Free baby seats | Book now!",
    //   "texto_mobile" => "Cadeiras para bebés gratuitas | Reserve já",
    //   "color" => "red",
    //   "text_color" => "white",
    // );
    
  }
}
