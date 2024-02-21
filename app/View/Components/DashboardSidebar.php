<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Sidebar extends Component
{
    public $current;
    public $is;
    public $logged;
    
    /**
     * Create a new component instance.
     */
    public function __construct($current, $is, $logged)
    {
        $this->current = $current;
        $this->is = $is;
        $this->logged = $logged;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.sidebar');
    }
}
