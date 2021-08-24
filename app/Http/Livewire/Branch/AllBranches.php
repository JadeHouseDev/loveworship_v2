<?php

namespace App\Http\Livewire\Branch;

use App\Models\Branch;
use Livewire\Component;

class AllBranches extends Component
{
    public $listeners = [
        'branchCreated' => 'refresh'
    ];

    public $branches;
    // public $openModal = "here";

    public function mount()
    {
        $this->branches = Branch::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->branches = Branch::orderBy('created_at', 'desc')->get();
    }

    public function view_branch()
    {
        $this->openModal = "slug";
    }

    public function render()
    {
        return view('livewire.branch.all-branches');
    }
}
