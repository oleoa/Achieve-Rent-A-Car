<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Navbar extends Component
{
    public $current;
    public $locale;

    /**
     * Create a new component instance.
     */
    public function __construct($locale, $current)
    {
        $this->current = $current;
        $this->locale = $locale;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
