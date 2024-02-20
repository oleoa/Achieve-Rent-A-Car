<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Helpers\Saver;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    private Array $data = array();
    protected Saver $saver;

    public function __construct()
    {
        $this->saver = new Saver();
    }

    protected function data(String $key, $value): void
    {
        $this->data[$key] = $value;
    }

    protected function load($view, $route)
    {
        $this->data['isAdmin'] = auth()->user()['admin']??false;
        $this->data['isLogged'] = auth()->user()??false;
        $this->data['current'] = $route;
        return view($view, $this->data);
    }
}
