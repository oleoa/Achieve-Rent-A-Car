<?php

namespace App\Http\Controllers;

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

  public function __construct()
  {
    $this->data = array();
    $this->localeExists = false;
    $discount = Discounts::where('active', true)->first();
    if($discount) $this->data['discount'] = $discount->toArray();
    else $this->data['discount'] = false;
  }

  protected function data(String $key, $value): void
  {
    $this->data[$key] = $value;
  }

  protected function title(String $title = Null): void
  {
    $this->data['title'] = ($title == Null? 'Achieve Rent A Car' : $title.' - Achieve Rent A Car');
  }

  protected function current(String $current): void
  {
    $this->data['current'] = $current;
  }

  protected function locale(String $locale): void
  {
    $this->localeExists = in_array($locale, ['en', 'pt', 'fr', 'de', 'es'])? true : false;
    $this->data['locale'] = $locale;
    if(!$this->localeExists) $this->data['locale'] = 'en';
    app()->setLocale($locale);
  }

  protected function load($view)
  {
    if(!$this->localeExists) abort(404);
    if(!array_key_exists('title', $this->data)) $this->title();
    if(!array_key_exists('current', $this->data)) abort(404);
    Views::create(['page' => $this->data['current'], 'locale' => $this->data['locale']]);
    return view($view, $this->data);
  }

}
