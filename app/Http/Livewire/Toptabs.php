<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use App\Models\User;
use App\Models\UserContribution;
use Livewire\Component;

class Toptabs extends Component
{
    public $tab_values = [
        'members' => 0,
        'tithes_this_month' => 0,
        'offertory_this_month' => 0,
        'branches' => 0,
    ];


    public function mount()
    {
        $this->tab_values['members'] = User::count();
        $this->tab_values['branches'] = Branch::count();
        $this->tab_values['tithes_this_month'] = $this->month_tithe();
        $this->tab_values['offertory_this_month'] = 0;
        // $this->tab_values['offertory_this_month'] = Branch::count();
    }

    public function month_tithe()
    {
        return UserContribution::whereYear('contribution_date', date('Y'))
            ->whereMonth('contribution_date', date('m'))
            ->sum('contribution_amount');
    }

    public function render()
    {
        return view('livewire.toptabs');
    }
}
