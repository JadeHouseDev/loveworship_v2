<?php

namespace App\Http\Livewire\Contribution;

use App\Http\Controllers\GeneralController;
use App\Jobs\SendSmsNotification;
use App\Models\Contribution;
use App\Models\User;
use App\Models\UserContribution;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class MemberContributionForm extends Component
{
    public $saveSuccess = false;
    public $saveError = false;
    public $errorMessage;

    public $contribution_type;
    public $contribution_amount;
    public $contribution_date;
    public $comment;

    public $contribution_list = [];

    public $member_id;
    public $branch_id;
    public $member_details;

    public function mount()
    {
        $this->member_id = request('user');
        $this->member_details = User::find($this->member_id);
        $this->branch_id = $this->member_details->branch_id;

        $this->contribution_list = Contribution::where('contribution_type', 'individual')->orderBy('contribution_name')->get();
    }

    public function addMemberContribution()
    {
        $this->validate([
            'contribution_type' => 'required|integer',
            'contribution_amount' => 'required|numeric',
            'contribution_date' => 'required|date',
            'comment' => 'nullable|string',
            // 'member' => 'required|integer'
        ]);

        // dd(
        //     $this->contribution_type,
        //     $this->contribution_amount,
        //     $this->contribution_date,
        //     $this->comment
        // );

        try {
            $new_contribution = UserContribution::create($this->modelData());

            $member_phone = $this->member_details->phone;
            $member_name = $this->member_details->fname;
            $contribution_type = Contribution::find($this->contribution_type);
            $contribution_name = $contribution_type->contribution_name;
            $amount = $this->contribution_amount;
            $date = $this->contribution_date;

            $msg = "Hello $member_name, Your $contribution_name payment of GHc $amount has been received for $date. God bless you.";

            $queue_sms = SendSmsNotification::dispatch($member_phone, $msg, "single");
            $this->emit('contributionCreated');
            $this->resetVars();
            $this->saveSuccess = true;
        } catch (\Throwable $th) {
            $this->saveError = true;
            $err = $th->getMessage();
            Log::warning("################# $err");
            $this->errorMessage = $th->getMessage();
        }
    }

    public function modelData()
    {
        return [
            'contribution_id' => $this->contribution_type,
            'contribution_amount' => $this->contribution_amount,
            'contribution_date' => $this->contribution_date,
            'comment' => $this->comment,
            'user_id' => $this->member_id,
            'branch_id' => $this->branch_id,
            'created_by' => 1,
            // 'created_by' => Auth::user()->id,
        ];
    }

    public function resetVars()
    {
        $this->contribution_type = "";
        $this->contribution_amount = "";
        $this->contribution_date = "";
        $this->comment = "";
    }


    public function render()
    {
        return view('livewire.contribution.member-contribution-form');
    }
}
