<?php

namespace App\Livewire;

use Livewire\Component;

class HouseImage extends Component
{
    public $image;
    public function render()
    {
        return view('livewire.house-image');
    }
}
