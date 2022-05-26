<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PackOfQuantity extends Component
{
    public $item;
    public $quantity = 1;

    public function mount($item)
    {
        $this->quantity = $item['pack_of_qty'];
    }

    public function  QuantityPlus(){
        $this->quantity += 1;
    }

    public function  QuantityMinus(){
        $this->quantity -= 1;
    }

    public function render()
    {
        return view('livewire.pack-of-quantity');
    }
}
