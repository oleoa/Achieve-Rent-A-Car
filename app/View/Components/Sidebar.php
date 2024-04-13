<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Sidebar extends Component
{
    public $current;
    public $locale;
    public $language;

    /**
     * Create a new component instance.
     */
    public function __construct($locale, $language)
    {
        $this->current = Route::currentRouteName();
        $this->locale = $locale;
        $this->language = $language;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }
}
