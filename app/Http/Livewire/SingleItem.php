<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SingleItem extends Component
{
    public $item;
    public $supply_quantity;
    public $match_quantity;
    public $accuracy = 1;

    public function mount($item)
    {
        $this->item= $item;
        $this->supply_quantity = $item['pack_of_qty'];
        $this->match_quantity = $item['match_pack_of_qty'];
        $this->accuracy = $item['accuracy'];
    }

    public function SupplyQuantityPlus(){
        $this->supply_quantity += 1;
    }

    public function SupplyQuantityMinus(){
        $this->supply_quantity = $this->supply_quantity > 1? $this->supply_quantity - 1:1;
    }


    public function MatchQuantityPlus(){
        $this->match_quantity += 1;
    }

    public function MatchQuantityMinus(){
        $this->match_quantity = $this->match_quantity > 1? $this->match_quantity - 1:1;
    }
    public function confirm(){
        $this->accuracy = 100;
        $this->item['accuracy'] = $this->accuracy;
    }

    public  function  reject(){
        $this->accuracy = 20;
    }

    public function supplyMarkAsBundle(){

    }

    public function matchMarkAsBundle(){

    }

    public function render()
    {
        return view('livewire.single-item');
    }
}
