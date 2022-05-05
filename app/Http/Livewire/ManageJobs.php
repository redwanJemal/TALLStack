<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ManageJobs extends Component
{
    use WithPagination;

    public $name;
    public $description;
    public $email;
    public $salary;

    public $showNewJobModal = false;

    public $search = '';

    public $selectedJob = null;
    

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'email' => 'required',
        'salary' => 'required',
    ];

    protected $queryString = [
        'search' => ['except' => ''],
    ];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $jobs = Job::where('name', 'like', '%'.$this->search.'%')->orderBy('created_at','DESC')->paginate(10);
        return view('livewire.manage-jobs', [
            'jobs' => $jobs
        ]);
    }

    public function delete($id)
    {
        $job = Job::find($id);
        $job->delete();
        $this->emit('jobDeleted');
    }

    public function postJob(){
        $this->validate();
        DB::transaction(function () {
            $createdJob = Job::create([
                'name' => $this->name,
                'description' => $this->description,
                'email' => $this->email,
                'salary' => $this->salary,
            ]);
        });
        $this->reset('name');
        $this->reset('description');
        $this->showNewJobModal = false;
    }
}
