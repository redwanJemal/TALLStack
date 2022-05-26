<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MatchOpportunity extends Component
{
    public $item;
    public $accuracy = 1;

    public function mount($item)
    {
        $this->accuracy = $item['accuracy'];
    }

    public function confirm(){
        $this->accuracy = 100;
        $this->item['accuracy'] = $this->accuracy;
    }

    public  function  reject(){
        $this->accuracy = 20;
    }

    public function render()
    {
        return view('livewire.match-opportunity');
    }
}
