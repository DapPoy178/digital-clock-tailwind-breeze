<?php

namespace App\View\Components;

use App\Models\Jadwal;
use Illuminate\View\Component;

class schedule_list extends Component
{
    public $jadwalKajian;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($jadwalKajian)
    {
        $this->jadwalKajian = $jadwalKajian;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.schedule_list');
    }
}
