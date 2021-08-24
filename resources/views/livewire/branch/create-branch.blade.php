<div>
    <div class="card card-box mb-3">
        <div class="card-header">
            <h5 class="font-weight-bold">Add Branch</h5>
        </div>
        <div class="card-body">
            <form wire:submit.prevent='createBranch'>
                @if ($save_success)
                <div class="alert alert-success text-center font-weight-bold">
                    Saved Successfully
                </div>
                @endif
                @if ($errorSaving)
                <div class="alert alert-danger text-center font-weight-bold">
                    {{ $errorMessage }}
                </div>
                @endif
                <div class="form-group">
                    <label for="branch_name">Branch Name</label>
                    <input wire:model='branch_name' placeholder="Madina Branch" type="text" name="branch_name"
                        class="form-control" id="branch_name">
                    @error('branch_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="branch_alias">Alias</label>
                    <input wire:model='branch_alias' placeholder="Love Temple" type="text" name="branch_alias"
                        class="form-control" id="branch_alias">
                    @error('branch_alias')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="branch_phone_number">Phone Number</label>
                    <input wire:model='branch_phone_number' type="text" name="branch_phone_number" class="form-control"
                        id="branch_phone_number">
                    @error('branch_phone_number')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="branch_location">Branch Location</label>
                    <input wire:model='branch_location' placeholder="Madina Akosombo Junction" type="text"
                        name="branch_location" class="form-control" id="branch_location">
                    @error('branch_location')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" value="Save" class="btn btn-success btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
