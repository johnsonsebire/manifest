<?php

namespace App\View\Components;

use Illuminate\View\Component;

class anchor extends Component
{


    // public $route;
    // public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->route=$route;
        // $this->class=$class; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.anchor');
    }
}
