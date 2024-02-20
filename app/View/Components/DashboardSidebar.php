<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Sidebar extends Component
{
    public $menu;
    public $isLogged;
    public $isAdmin;
    
    /**
     * Create a new component instance.
     */
    public function __construct($menu, $isLogged, $isAdmin)
    {
        $this->menu = $menu;
        $this->isLogged = $isLogged;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.sidebar');
    }
}
