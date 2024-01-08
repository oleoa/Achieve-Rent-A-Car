<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Views;

class Controller extends BaseController
{
  use AuthorizesRequests, ValidatesRequests;

  private Array $data;
  private Bool $localeExists;

  public function __construct()
  {
    $this->data = array();
    $this->localeExists = false;
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
    if(!$this->localeExists) return view('404', $this->data);
    if(!array_key_exists('title', $this->data)) $this->title();
    if(!array_key_exists('current', $this->data)) return view('404', $this->data);
    Views::create(['page' => $this->data['current']]);
    $this->data['countries'] = ['USA', 'Canada', 'UK', 'Australia', 'India'];
    return view($view, $this->data);
  }

}
