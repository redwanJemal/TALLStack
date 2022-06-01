<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OpportunitySupplyMatch extends Component
{
    public function render()
    {
        $items = collect([[
            'id' => 1
        ],[
            'id' => 2
        ]]);

        return view('livewire.opportunity-supply-match',[
            'items' => $items
        ]);
    }
}
