<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Addmember extends Component
{
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


    public $fname;
    public $lname;
    public $dob;
    public $branch;
    public $phone;
    public $area_of_residence;

    public function addMember()
    {
        $this->validate([
            'fname' => 'required',
            'lname' => 'required',
            'dob' => 'nullable',
            'branch' => 'required',
            'phone' => 'nullable',
            'area_of_residence' => 'required',
        ]);

        // dd($fname, $lname, $dob, $branch, $phone, $area_of_residence);

        try {
            User::create([
                'fname' => $this->fname,
                'lname' => $this->lname,
                'dob' => $this->dob,
                'branch_id' => $this->branch,
                'phone' => $this->phone,
                'area_of_residence' => $this->area_of_residence,
            ]);
            // $this->fname = '';
            // $this->lname = '';
            // $this->dob = '';
            // $this->branch = '';
            // $this->phone = '';
            // $this->area_of_residence = '';

            $this->emit('memberAdded');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function render()
    {
        return view('livewire.addmember');
    }
}
