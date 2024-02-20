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
        // Creates the menu items both for navbar and sidebar
        $this->data['menu'] = [
            'views' => [
                'name' => 'Views',
                'route' => route('views'),
                'current' => $route == 'views'? true : false
            ],
            'faq' => [
                'name' => 'FAQ',
                'route' => route('faq.list'),
                'current' => $route == 'faq'? true : false
            ],
            'discounts' => [
                'name' => 'Discounts',
                'route' => route('discount.list'),
                'current' => $route == 'discounts'? true : false
            ],
            'users' => [
                'name' => 'Users',
                'route' => route('user.list'),
                'current' => $route == 'users'? true : false
            ],
            'logout' => [
                'name' => 'Logout',
                'route' => route('sign.out'),
                'current' => $route == 'logout'? true : false
            ]
        ];

        $this->data['isAdmin'] = auth()->user()['admin']??false;
        $this->data['isLogged'] = auth()->user()??false;
        $this->data['current'] = $route;
        return view($view, $this->data);
    }
}
