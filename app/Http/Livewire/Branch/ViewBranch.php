<?php

namespace App\Http\Livewire\Branch;

use App\Models\Branch;
use Livewire\Component;

class ViewBranch extends Component
{
    public $branch_slug;
    public $branch_details;

    public function mount()
    {
        $this->branch_slug = request('branch_slug');
        $this->branch_details = Branch::where('branch_slug', request('branch_slug'))->first();
    }

    public function render()
    {
        return view('livewire.branch.view-branch');
    }
}
