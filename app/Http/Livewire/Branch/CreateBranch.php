<?php

namespace App\Http\Livewire\Branch;

use App\Models\Branch;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class CreateBranch extends Component
{
    public $save_success = false;
    public $errorSaving = false;
    public $errorMessage;

    public $branch_name;
    public $branch_alias;
    public $branch_phone_number;
    public $branch_location;

    public function createBranch()
    {
        $this->validate([
            'branch_name' => 'required|string',
            'branch_alias' => 'nullable|string',
            'branch_phone_number' => 'required|numeric',
            'branch_location' => 'required|string',
        ]);

        try {
            Branch::create([
                'branch_name' => $this->branch_name,
                'branch_alias' => $this->branch_alias,
                'branch_phone_number' => $this->branch_phone_number,
                'branch_location' => $this->branch_location,
                'branch_slug' => "Branch_" . rand(000001, 999999),
            ]);
            $this->branch_name = '';
            $this->branch_alias = '';
            $this->branch_phone_number = '';
            $this->branch_location = '';

            $this->save_success = true;

            $this->emit('branchCreated');
        } catch (\Throwable $th) {
            $this->errorSaving = true;
            $this->errorMessage = "Internal Error Occurred";
            // $this->errorMessage = $th->getMessage();
            Log::warning("######################" . $th->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.branch.create-branch');
    }
}
