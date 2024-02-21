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
        // Checks if the user is logged in and if it's an admin
        $this->data['is']['admin'] = auth()->user()['admin']??false;
        $this->data['is']['logged'] = auth()->user()??false;
        $this->data['current'] = $route;
        
        // Returns the view with the data
        return view($view, $this->data);
    }
}
