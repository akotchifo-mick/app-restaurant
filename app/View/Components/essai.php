<?php

namespace App\View\Components;

use Illuminate\View\Component;

class essai extends Component
{
    //public $message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.essai');
    }
}

