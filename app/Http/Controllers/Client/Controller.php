<?php

namespace App\Http\Controllers\Client;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Views;
use App\Models\Discounts;

class Controller extends BaseController
{
  use AuthorizesRequests, ValidatesRequests;

  private Array $data;
  private Bool $localeExists;

  protected function data(String $key, $value): void
  {
    if(!$this->data) $this->data = array();
    $this->data[$key] = $value;
  }

  protected function locale(String $locale): void
  {
    $this->localeExists = in_array($locale, ['en', 'pt', 'fr', 'de', 'es'])? true : false;
    $this->data['locale'] = $locale;
    if(!$this->localeExists) $this->data['locale'] = 'en';
    app()->setLocale($locale);
  }

  protected function load($route, $locale)
  {
    // Checks if the locale exists
    $this->locale($locale);
    if(!$this->localeExists) abort(404);

    // Checks for discounts
    $discount = Discounts::where('active', true)->first();
    if($discount) $this->data['discount'] = $discount->toArray();
    else $this->data['discount'] = false;

    $this->data['current'] = $route;
    $this->data['title'] = 'Title-'.$this->data['current'];
    Views::create(['page' => $this->data['current'], 'locale' => $this->data['locale']]);

    return view($route, $this->data);
  }
}
