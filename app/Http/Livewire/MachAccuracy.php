<?php

namespace App\Http\Livewire;

use App\Models\Opportunities;
use Livewire\Component;

class MachAccuracy extends Component
{
    public $packQt = 1;

    public function render()
    {
        $items = Opportunities::all();

        return view('livewire.mach-accuracy',[ 'items' => $items]);
    }

    public function QuantityPlus($item)
    {
        $this->packQt = $item['monthly_est_sale'];
        $item['monthly_est_sale'] += 1;
    }
}
