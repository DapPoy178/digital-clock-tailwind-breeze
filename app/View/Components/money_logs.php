<?php

namespace App\View\Components;

use App\Models\Money;
use Illuminate\View\Component;

class money_logs extends Component
{
    public $log;
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($log)
    {
        $this->log = $log;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $logs = Money::all();

        return view('components.money_logs', ['logs' => $logs]);
    }
}
