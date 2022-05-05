<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class ShowJobs extends Component
{
    use WithPagination;

    public $search = '';

    public $selectedJob = null;
    

    protected $queryString = [
        'search' => ['except' => ''],
    ];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $jobs = Job::where([['name', 'like', '%'.$this->search.'%'],['status','=',1]])->orderBy('created_at','DESC')->paginate(5);

        return view('livewire.show-jobs', [
            'jobs' => $jobs
        ]);
    }

    public function jobDetail($id)
    {
        $this->selectedJob = Job::find($id);
    }
}
