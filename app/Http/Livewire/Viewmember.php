<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use App\Models\User;
use Livewire\Component;

class Viewmember extends Component
{
    public $updateSuccess = false;
    public $updateError = false;
    public $errorMessage;


    public $member_details;
    public $branches;

    public $fname;
    public $lname;
    public $dob;
    public $branch;
    public $phone;
    public $area_of_residence;

    public function mount()
    {
        $this->branches = Branch::orderBy('branch_name')->get();
        $this->member_details = User::find(request('user'));
        $this->setDetails();
    }

    public function setDetails()
    {
        $this->fname = $this->member_details->fname;
        $this->lname = $this->member_details->lname;
        $this->dob = $this->member_details->dob;
        $this->branch = intVal($this->member_details->branch_id);
        $this->phone = $this->member_details->phone;
        $this->area_of_residence = $this->member_details->area_of_residence;
    }

    public function update()
    {
        
        $this->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'dob' => 'nullable|date',
            'branch' => 'required|numeric',
            'phone' => 'nullable|numeric',
            'area_of_residence' => 'required|string',
        ]);

        try {
            // dd($this->branch);
            $member = User::find($this->member_details->id)->update($this->modelData());
            $this->updateSuccess = true;
        } catch (\Throwable $th) {
            $this->updateError = true;
            $this->errorMessage = $th->getMessage();
        }
    }

    public function modelData(){
        return [
            'fname' => $this->fname,
            'lname' => $this->lname,
            'dob' => $this->dob,
            'branch_id' => intVal($this->branch),
            'phone' => $this->phone,
            'area_of_residence' => $this->area_of_residence,
        ];
    }

    public function resetVars()
    {
        $this->fname = "";
        $this->lname = "";
        $this->dob = "";
        $this->branch = "";
        $this->phone = "";
        $this->area_of_residence = "";
    }

    public function render()
    {
        return view('livewire.viewmember');
    }
}
