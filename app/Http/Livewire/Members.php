<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Members extends Component
{
    protected $listeners = [
        'memberAdded'
    ];

    public $members;

    // show add member form or not
    public $form = 0;

    public function toggle_form()
    {
        if ($this->form == 0) {
            $this->form = 1;
        } else {
            $this->form = 0;
        }
    }

    public function mount()
    {
        // $this->members = User::with('branch')->find(1);
        $this->members = User::with('branch')->orderBy('created_at', 'desc')->get();
        // dd($this->members);
    }


    public function memberAdded()
    {
        $this->members = User::with('branch')->orderBy('created_at', 'desc')->get();
    }



    public function render()
    {
        return view('livewire.members');
    }
}
