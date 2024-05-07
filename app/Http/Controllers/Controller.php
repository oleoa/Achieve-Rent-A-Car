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
    $localeExists = in_array($locale, ['en', 'pt', 'local', 'locale'])? true : false;
    if(!$localeExists) abort(404);
    $this->data['locale'] = $locale;
    $this->data['language'] = '';
    if($locale == 'locale') $this->data['language'] = 'en';
    else if($locale == 'local') $this->data['language'] = 'pt';
    else $this->data['language'] = $locale;
    app()->setLocale($this->data['language']);
  }
}
