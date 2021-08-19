<?php

namespace App\Http\Livewire;

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
