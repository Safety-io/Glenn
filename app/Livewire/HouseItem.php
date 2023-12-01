<?php

namespace App\Livewire;

use Livewire\Component;

class HouseItem extends Component
{
    public $house;

    public function render()
    {
        return view('livewire.house-item');
    }

    public function placeholder()
    {
        return view('components.house-item-place-holder');
    }


}
