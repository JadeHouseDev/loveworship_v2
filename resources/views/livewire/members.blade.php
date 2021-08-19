<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="">
                <div class="card card-box mb-5">
                    <div class="card-header">
                        <h3 class="my-3">Members</h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">All Members</a>
                            </li>
                        </ul>

                        <div class="tab-content p-3 pb-0">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card card-box mb-5 table-responsive">
                                    <div class="card-header">
                                        <div class="card-header--actions">
                                            <button
                                                onclick="document.getElementById('add_new_member').style.display='block'"
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-plus"></i> Add New Member
                                            </button>
                                        </div>
                                    </div>
                                    <table id="example" class="table table-hover w-100" data-toggle="datatable">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Branch</th>
                                                <th>Area of Residence</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($members ?? "")
                                            @foreach ($members as $user)
                                            <tr>
                                                <td></td>
                                                <td>{{ $user->fname }} {{ $user->lname }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->branch }}</td>
                                                <td>{{ $user->area_of_residence }}</td>
                                                <td>
                                                    <a href="./entity_page.html"
                                                        class="btn btn-first pl-2 pr-2 btn-sm ml-1 mr-1"
                                                        title="View details">
                                                        <i class="fas fa-binoculars"></i>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ADD NEW MEMBER MODAL  --}}
    <div id="add_new_member" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom" style="border-radius: 15px;">
            <div class="w3-container">
                <span onclick="document.getElementById('add_new_member').style.display='none'"
                    class="w3-closebtn">&times;</span>
                <div class="card shadow-md m-3">
                    <div class="card-header">
                        <h3>Add New Member</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">First Name: </label>
                                        <input v-model="user.fname" type="text" name="fname"
                                            placeholder="Enter First Name" id="fname" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="lname">Last Name: </label>
                                        <input v-model="user.lname" type="text" name="lname"
                                            placeholder="Enter Last Name" id="lname" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="dob">Date of Birth: </label>
                                        <input v-model="user.dob" type="date" name="dob"
                                            placeholder="Enter Date of Birth" id="dob" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="branch">Branch: </label>
                                        <select v-model="user.branch" name="branch" id="branch" class="form-control"
                                            required>
                                            <option value="">Select Branch</option>
                                            <option v-for="(branch, index) in branches" :key="index" :value="branch.id">
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number: </label>
                                        <input v-model="user.phone" type="text" name="lname"
                                            placeholder="Enter Phone Number" id="lname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="area_of_residence">Area of Residence: </label>
                                        <input v-model="user.area_of_residence" type="text" name="area_of_residence"
                                            placeholder="Enter Area of Residence" id="area_of_residence"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Save Member"
                                            class="btn btn-block btn-primary main_color_btn">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
