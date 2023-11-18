<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HouseItem extends Component
{
    public $house;

    /**
     * Create a new component instance.
     */
    public function __construct($house)
    {
        $this->house = $house;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.house-item');
    }
}
