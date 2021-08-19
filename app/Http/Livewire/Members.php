<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Members extends Component
{
    public $members = [];

    public function mount()
    {
        $this->members = User::all();
    }

    public function render()
    {
        return view('livewire.members');
    }
}
