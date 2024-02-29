<?php

namespace App\Http\Controllers\Client;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Views;
use App\Models\Discounts;
use Jenssegers\Agent\Agent;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    private Array $data = array();
    private Bool $localeExists = false;

    protected function data(String $key, $value): void
    {
      $this->data[$key] = $value;
    }

    private function locale(String $locale): void
    {
      $this->localeExists = in_array($locale, ['en', 'pt', 'fr', 'de', 'es', 'local', 'translations'])? true : false;
      $locale = $locale == 'local' ? 'en' : $locale;
      $this->data['locale'] = $locale;
      if(!$this->localeExists) $this->data['locale'] = 'en';
      app()->setLocale($locale);
    }

    protected function load($view, $route, $locale)
    {
      // Checks if the locale exists
      $this->locale($locale);
      if(!$this->localeExists) abort(404);

      // Creates the menu items both for navbar and sidebar
      $this->data['menu'] = [
        'links' => [
          'home' => [
            'name' => 'Home',
            'route' => route('home', $this->data['locale']),
            'current' => $route == 'home'? true : false
          ],
          'fleet' => [
            'name' => 'Fleet',
            'route' => route('fleet', $this->data['locale']),
            'current' => $route == 'fleet'? true : false
          ],
          'about' => [
            'name' => 'About',
            'route' => route('about', $this->data['locale']),
            'current' => $route == 'about'? true : false
          ],
          'seats' => [
            'name' => 'Seats',
            'route' => route('seats', $this->data['locale']),
            'current' => $route == 'seats'? true : false
          ],
          'faq' => [
            'name' => 'FAQ',
            'route' => route('faq', $this->data['locale']),
            'current' => $route == 'faq'? true : false
          ],
          'contact' => [
            'name' => 'Contact',
            'route' => route('contact', $this->data['locale']),
            'current' => $route == 'contact'? true : false
          ]
        ],
        'locale' => [
          'en' => [
            'name' => 'en',
            'route' => route($route, 'en')
          ],
          'pt' => [
            'name' => 'pt',
            'route' => route($route, 'pt')
          ]
        ]
      ];

      return ['it arrives here'];

      // Checks for discounts
      $discount = Discounts::where('active', true)->first();
      if($discount) $this->data['discount'] = $discount->toArray();
      else $this->data['discount'] = false;

      // Sets the current page
      $this->data['current'] = $route;

      // Sets the current page title
      $this->data['title'] = 'Title-'.$this->data['current'];
      
      // Checks if the user is using a mobile device and logs the view
      $agent = new Agent();

      // Creates the view if the user is not in local environment
      if($locale != 'local')
          Views::create(['page' => $this->data['current'], 'locale' => $this->data['locale'], 'mobile' => $agent->isMobile()]);

      // Returns the view
      return view($view, $this->data);
    }
}
