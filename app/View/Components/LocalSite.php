<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class LocalSite extends Component
{
    public $locale;
    
    /**
     * Create a new component instance.
     */
    public function __construct($locale)
    {
        $this->locale = $locale;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.local-site');
    }
}
