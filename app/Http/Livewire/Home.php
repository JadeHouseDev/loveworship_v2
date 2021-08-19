<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public $name = 'title';

    public $titles = [
        [
            't' => 'Movie 1'
        ],
        [
            't' => 'Movie 2'
        ],
    ];

    public $users = [];

    public function mount()
    {
        $this->users = User::all();
        // dd($this->users);
    }


    public function add()
    {
        $this->titles[] = [
            't' => $this->name
        ];
    }

    public function render()
    {
        return view('livewire.home');
    }
}
