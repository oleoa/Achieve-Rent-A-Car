<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Loader extends Component
{
    public $isLight;

    /**
     * Create a new component instance.
     */
    public function __construct($isLight = true)
    {
        $this->isLight = $isLight;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.loader');
    }
}
