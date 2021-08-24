<div class="card card-box mb-5 table-responsive">
    <div class="card-header">
        <h5 class="font-weight-bold">Branches</h5>
        {{-- <div class="card-header--actions"></div> --}}
    </div>
    <table id="example" class="table table-hover w-100" data-toggle="datatable">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Alias</th>
                <th>Phone</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($branches ?? "")
            @foreach ($branches as $branch)
            <tr>
                <td></td>
                <td>{{ $branch->branch_name }}</td>
                <td>{{ $branch->branch_alias }}</td>
                <td>{{ $branch->branch_phone_number }}</td>
                <td>{{ $branch->branch_location }}</td>
                <td>
                    <a href="{{ route('view_branch', [$branch->branch_slug]) }}"
                        class="btn btn-first pl-2 pr-2 btn-sm ml-1 mr-1" title="View">
                        <i class="fas fa-binoculars"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
