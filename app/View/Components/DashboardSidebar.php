<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Sidebar extends Component
{
    public $current;
    public $is;
    public $name;
    
    /**
     * Create a new component instance.
     */
    public function __construct($current, $is, $name)
    {
        $this->current = $current;
        $this->is = $is;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.sidebar');
    }
}
