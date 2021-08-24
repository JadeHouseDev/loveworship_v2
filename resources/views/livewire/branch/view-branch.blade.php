<div>
    <div class="card card-box mb-3">
        <div class="card-header">
            <h5 class="font-weight-bold text-danger">Branch Details</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <p>Branch Name:</p>
                    <h5 class="font-weight-bold"> {{ $branch_details->branch_name }} -
                        {{ $branch_details->branch_alias }}</h5>
                </div>
                <div class="col-md-3">
                    <p>Branch Location:</p>
                    <h5 class="font-weight-bold"> {{ $branch_details->branch_location }}</h5>
                </div>
                <div class="col-md-3">
                    <p>Branch Number:</p>
                    <h5 class="font-weight-bold"> {{ $branch_details->branch_phone_number }}</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-box mb-3">
        <div class="card-header">
            <h5 class="font-weight-bold text-danger">Finances</h5>
        </div>
        <div class="card-body">
            <h3>Display Branch Offertory and other financial info</h3>
        </div>
    </div>

    @livewire('members')
</div>
