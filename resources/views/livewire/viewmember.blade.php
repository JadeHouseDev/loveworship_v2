<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-box">
                    <div class="card-header">
                        <h5 class="font-weight-bold">Basic Member Info</h5>
                    </div>
                    <div class="card-body">
                        <h4 class="font-weight-bold">{{ $member_details->fname ?? "" }}
                            {{ $member_details->lname ?? "" }} | {{ $member_details->phone ?? "" }} |
                            {{ $member_details->area_of_residence ?? "" }} </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            @livewire('contribution.member-contribution-form')
        </div>

        <div class="col-md-8">
            @livewire('contribution.member-contribution-list')
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-box">
                    <div class="card-header">
                        <h5 class="font-weight-bold">
                            Edit {{ $member_details->fname ?? "" }} {{ $member_details->lname ?? "" }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='update'>
                            <div class="row">
                                @if ($updateSuccess)
                                <div class="col-md-12 text-center alert alert-success">Member Updated Successfully</div>
                                @endif
                                @if ($updateError)
                                <div class="col-md-12 text-center alert alert-danger">Member Cannot Be Updated Now Try
                                    Again
                                    Later. {{ $errorMessage }}</div>
                                @endif
                                <div class="col-md-4 form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" wire:model="fname" name="fname" class="form-control" id="fname">
                                    @error('fname')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" wire:model="lname" name="lname" class="form-control" id="lname">
                                    @error('lname')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" wire:model="phone" name="phone" class="form-control" id="phone">
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="area_of_residence">Area of Residence</label>
                                    <input type="text" wire:model="area_of_residence" name="area_of_residence"
                                        class="form-control" id="area_of_residence">
                                    @error('area_of_residence')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" wire:model="dob" name="dob" class="form-control" id="dob">
                                    @error('dob')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="branch">Branch</label>
                                    <select wire:model="branch" name="branch" class="form-control" id="branch">
                                        <option value="{{ $member_details->branch->id }}" selected='selected'>
                                            {{ $member_details->branch->branch_name }}</option>
                                        @if ($branches ?? "")
                                        @foreach ($branches as $branch)
                                        <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    @error('branch')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success float-right">UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
