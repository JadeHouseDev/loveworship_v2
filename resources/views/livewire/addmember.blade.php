<div>
    <div class="card card-box mb-3">
        <div class="card-header">
            <h3>Add Member</h3>
            <button wire:click="toggle_form" class="text-white btn btn-sm btn-danger float-right">&times;
                Close</button>
        </div>
        <div class="card-body">
            <form wire:submit.prevent='addMember'>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{-- {{ $fname }} --}}
                            <label for="fname">First Name: </label>
                            <input wire:model="fname" type="text" placeholder="Enter First Name" class="form-control">
                            @error('fname') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            {{-- {{ $lname }} --}}
                            <label for="lname">Last Name: </label>
                            <input wire:model="lname" type="text" placeholder="Enter Last Name" class="form-control">
                            @error('lname') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth: </label>
                            <input wire:model="dob" type="date" placeholder="Enter Date of Birth" class="form-control">
                            @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="branch">Branch: </label>
                            <select wire:model="branch" class="form-control">
                                <option value="">Select Branch</option>
                                <option value="1">Madina</option>
                            </select>
                            @error('branch') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number: </label>
                            <input wire:model="phone" type="text" placeholder="Enter Phone Number" class="form-control">
                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="area_of_residence">Area of Residence: </label>
                            <input wire:model="area_of_residence" type="text" placeholder="Enter Area of Residence"
                                class="form-control">
                            @error('area_of_residence') <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Save Member" class="btn btn-block btn-primary main_color_btn">
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
