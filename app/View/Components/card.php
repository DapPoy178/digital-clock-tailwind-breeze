<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Money;

class card extends Component
{
    public $card;
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($card)
    {
        $this->card = $card;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $income = Money::where('status', 'income')->sum('total');
        $outcome = Money::where('status', 'outcome')->sum('total');
        $last_row = Money::latest('id')->first();
        $total_kas = $last_row->total_kas;

        return view('components.card', ['income' => $income, 'outcome' => $outcome, 'total_kas' => $total_kas]);
    }
}
