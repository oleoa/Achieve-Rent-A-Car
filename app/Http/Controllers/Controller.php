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
    /*
    $this->data['discount'] = array(
      "text" => "FREE BABY CAR SEATS | FREE ADDITIONAL DRIVER | UNLIMITED MILEAGE",
      "texto" => "CADEIRAS PARA BEBÉS GRATUITAS | CONDUTORES ADICIONAIS GRATUITOS | QUILOMETRAGEM ILIMITADA",
      "text_mobile" => "FREE BABY CAR SEATS | FREE ADDITIONAL DRIVER | UNLIMITED MILEAGE",
      "texto_mobile" => "CADEIRAS PARA BEBÉS GRATUITAS | CONDUTORES ADICIONAIS GRATUITOS | QUILOMETRAGEM ILIMITADA",
      "color" => "red",
      "text_color" => "white",
    );
    */
  }
}
 