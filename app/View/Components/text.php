<?php

namespace App\View\Components;

use Illuminate\View\Component;

class text extends Component
{
    public $rtext;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($rtext)
    {
        $this->rtext = $rtext;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text');
    }
}
