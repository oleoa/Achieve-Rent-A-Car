<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Sidebar extends Component
{
    public $current;
    public $is;
    
    /**
     * Create a new component instance.
     */
    public function __construct($current, $is)
    {
        $this->current = $current;
        $this->is = $is;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.sidebar');
    }
}
