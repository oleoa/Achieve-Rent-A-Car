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

  public function __construct()
  {
    $this->data = array();
  }

  protected function title(String $title = Null): void
  {
    $this->data['title'] = ($title == Null? 'Achieve Rent A Car' : $title.' - Achieve Rent A Car');
  }

  protected function current(String $current): void
  {
    $this->data['current'] = $current;
  }

  protected function load($view)
  {
    if(!array_key_exists('title', $this->data)) $this->title();
    if(!array_key_exists('current', $this->data)) return view('404');
    //Views::create(['page' => $this->data['current']]);
    return view($view, $this->data);
  }

}
