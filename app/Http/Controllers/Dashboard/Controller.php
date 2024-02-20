<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Helpers\Saver;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    private Array $data;
    protected Saver $saver;

    protected function data(String $key, $value): void
    {
        $this->data[$key] = $value;
    }

    protected function current(String $current): void
    {
        $this->data['current'] = $current;
    }

    protected function range(string $range):void
    {
        $this->data['range'] = $range;
    }

    protected function load($view)
    {
        if(!array_key_exists('current', $this->data)) return view('404', $this->data);
        $this->data['isAdmin'] = auth()->user()['admin']??false;
        $this->data['isLogged'] = auth()->user()??false;
        return view($view, $this->data);
    }
}
