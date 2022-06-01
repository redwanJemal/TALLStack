<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OpportunityItem extends Component
{
    public $item;
    public $set_count;
    public $itemShowDetail;

    public function mount($item)
    {
        $this->item= $item;
        $this->itemShowDetail = false;
        if($item['id'] == 1){
            $this->itemShowDetail = true;
        }
        $this->set_count = $item['set'];
    }

    public function showDetail()
    {
        $this->itemShowDetail = !$this->itemShowDetail;
    }

    public function SetPlus(){
        $this->set_count += 1;
    }

    public function  SetMinus(){
        $this->set_count = $this->set_count - 1 ;
        //dd($this->item['set']);
    }

    public function render()
    {
        return view('livewire.opportunity-item');
    }
}
