<?php

namespace App\Http\Livewire\Contribution;

use App\Models\UserContribution;
use Livewire\Component;

class MemberContributionList extends Component
{
    protected $listeners = [
        'contributionCreated' => 'refresh'
    ];

    public $member_id;
    public $member_contributions = [];

    public function mount()
    {
        $this->member_id = request('user');
        $this->member_contributions = UserContribution::where('user_id', $this->member_id)->orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->member_contributions = UserContribution::where('user_id', $this->member_id)->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.contribution.member-contribution-list');
    }
}
