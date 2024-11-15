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
    
    $this->data['discount'] = array(
      "text" => "Get 10€ Off! Use the code FALL24 (Min 3 days, until Dec 20º) <br> Free baby seats <br> Book now!",
      "texto" => "Ganha 10€ de desconto! Introduza o código FALL24 (Min. 3 dias, até 20 dez) <br> Cadeiras para bebés gratuitas <br> Reserve já",
      "text_mobile" => "Get 10€ Off! Use the code FALL24 * <br> *(Min 3 days, until Dec 20º) <br> Free baby seats <br> Book now!",
      "texto_mobile" => "Ganha 10€ de desconto! Introduza o código FALL24 * <br> *(Min. 3 dias, até 20 dez) <br> Cadeiras para bebés gratuitas <br> Reserve já",
      "color" => "red",
      "text_color" => "white",
    );
    
  }
}
 