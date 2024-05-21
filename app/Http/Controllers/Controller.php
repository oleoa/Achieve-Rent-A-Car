<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, ValidatesRequests;

  protected Array $data = array();

  protected function isCurrent(String $current): void
  {
    $this->data['current'] = $current;
  }

  protected function setLocale(String $locale): void
  {
    $localeExists = in_array($locale, ['en', 'pt'])? true : false;
    if(!$localeExists) abort(404);
    $this->data['locale'] = $locale;
    app()->setLocale($this->data['locale']);
    $this->data['discount'] = array(
      "text" => "Enjoy! | Free Baby Car Seats | Book now",
      "texto" => "Aproveite a promoção! | Cadeiras Auto Gratuitas | Reserve já",
      "text_mobile" => "Enjoy! | Free Baby Car Seats | Book now",
      "texto_mobile" => "Aproveite a promoção! | Cadeiras Auto Gratuitas | Reserve já",
      "color" => "red",
      "text_color" => "white",
    );
  }
}
