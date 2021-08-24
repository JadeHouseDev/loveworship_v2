<div>
    <div class="card mb-4">
        <div class="card-box">
            <div class="card-header">
                <h5 class="font-weight-bold">Add Contribution</h5>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="addMemberContribution">
                    <div class="row">
                        @if ($saveSuccess)
                        <div class="alert alert-success text-center text-uppercase col-md-12">
                            Saved Successfully
                        </div>
                        @endif
                        @if ($saveError)
                        <div class="alert alert-danger text-center text-uppercase col-md-12">
                            {{ $errorMessage }}
                        </div>
                        @endif
                        <div class="form-group col-md-12">
                            <label for="contribution_type">Contribution Type</label>
                            <select wire:model="contribution_type" name="contribution_type" id="contribution_type"
                                class="form-control" required>
                                <option value="">Select Contribution Type</option>
                                @if ($contribution_list)
                                @foreach ($contribution_list as $cont)
                                <option value="{{ $cont->id }}">{{ $cont->contribution_name }}</option>
                                @endforeach
                                @endif
                            </select>
                            @error('contribution_type')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="contribution_amount">Amount</label>
                            <input wire:model="contribution_amount" type="text" name="contribution_amount"
                                id="contribution_amount" placeholder="Amount in Cedis" class="form-control" required />
                            @error('contribution_amount')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="contribution_date">Date</label>
                            <input wire:model="contribution_date" type="date" name="contribution_date"
                                id="contribution_date" placeholder="Date being paid for" class="form-control"
                                required />
                            @error('contribution_date')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="comment">Comment</label>
                            <input wire:model="comment" type="text" name="comment" id="comment"
                                placeholder="Anything to Note" class="form-control" />
                            @error('comment')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <input type="submit" value="Save" class="btn btn-primary btn-block" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
