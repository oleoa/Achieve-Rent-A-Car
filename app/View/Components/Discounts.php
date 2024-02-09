<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Discounts extends Component
{
    public $discount;
    public $locale;
    /**
     * Create a new component instance.
     */
    public function __construct($discount, $locale)
    {
        $this->discount = $discount;
        $this->locale = $locale;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.client.discounts');
    }
}
