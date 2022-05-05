<?php

namespace App\Http\Livewire\Jobs\Admin;

use Livewire\Component;

class Sidebar extends Component
{
    public $sidebarIsOpen = false;

    public function render()
    {
        return view('livewire.jobs.admin.sidebar');
    }
}
