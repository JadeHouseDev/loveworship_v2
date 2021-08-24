<div class="card">
    <div class="card-box">
        <div class="card-header">
            <h5 class="font-weight-bold">Contributions</h5>
        </div>
        <div class="card-body">
            <table class="table" class="table table-hover w-100" data-toggle="datatable">
                <thead>
                    {{-- <th></th> --}}
                    <th>Type</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Branch</th>
                    <th>Comment</th>
                    <th></th>
                </thead>
                <tbody>
                    @if ($member_contributions)
                    @foreach ($member_contributions as $cont)
                    <tr>
                        {{-- <td></td> --}}
                        <td>{{ $cont->contribution->contribution_name }}</td>
                        <td>{{ date('M',strtotime($cont->contribution_date)) }} {{ $cont->contribution_date }}</td>
                        <td>{{ $cont->contribution_amount }}</td>
                        <td>{{ $cont->branch->branch_name ?? "" }}</td>
                        <td>{{ $cont->comment }}</td>
                        <td>
                            <a href="" class="btn btn-warning pl-2 pr-2 btn-sm ml-1 mr-1" title="View">
                                Resend Message <i class="fas fa-envelope"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
