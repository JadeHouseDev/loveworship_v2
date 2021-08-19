<div>
    <div class="app-header">
        <div class="d-flex">
            <button class="navbar-toggler hamburger hamburger--elastic toggle-sidebar" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <button class="navbar-toggler hamburger hamburger--elastic toggle-sidebar-mobile" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <div class="search-link">
                <div class="d-none d-lg-flex">
                    <i class="fas search-icon fa-search"></i>
                    <input type="text" placeholder="Click here to search...">
                </div>
                <div class="d-none d-sm-flex d-lg-none">
                    <button class="btn btn-outline-primary btn-sm px-3" type="button" data-toggle="modal"
                        data-target="#search-modal">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <span data-toggle="tooltip" title="You have <b>0</b> new notifications" data-tooltip-class="tooltip-danger"
                data-trigger="hover" data-html="true" data-placement="bottom">
                <button type="button"
                    class="btn bg-neutral-danger text-danger font-size-lg mr-2 p-0 d-inline-block shadow-none text-center d-44 rounded position-relative"
                    data-toggle="modal" data-target="#modal-notifications">
                    <span class="badge badge-circle badge-danger">New notifications</span>
                    <i class="far fa-bell"></i>
                </button>
            </span>

        </div>
    </div>
    <div class="modal fade" id="modal-notifications" tabindex="-1" role="dialog" aria-labelledby="modal-notifications"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <div class="hero-wrapper bg-composed-wrapper bg-plum-plate h-100 rounded-left">
                                <div class="flex-grow-1 w-100 d-flex align-items-center">
                                    <div class="bg-composed-wrapper--image rounded-left"
                                        style="background-image: url('../assets/img/hero-bg/hero-1.html');"></div>
                                    <div class="bg-composed-wrapper--bg bg-second opacity-5 rounded-left"></div>
                                    <div class="bg-composed-wrapper--content p-5">
                                        <div class="d-flex align-items-center">
                                            <span class="badge badge-pill badge-second px-4 h-auto py-1">New
                                                release</span>
                                            <span class="text-white-50 pl-3" data-toggle="tooltip"
                                                data-placement="right" title="More info placeholder!">
                                                <i class="far fa-question-circle"></i>
                                            </span>
                                        </div>
                                        <div class="text-white mt-3">
                                            <h1 class="display-4 my-3 font-weight-bold">
                                                Wonderful serenity has possession
                                            </h1>
                                            <p class="font-size-md mb-0 text-white-50">
                                                A free hour, when our power of choice is untrammelled and when
                                                nothing prevents.
                                            </p>
                                            <div class="divider border-2 my-4 border-light opacity-2 rounded w-25">
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-warning">
                                                    <span class="btn-wrapper--label">
                                                        Browse gallery
                                                    </span>
                                                    <span class="btn-wrapper--icon">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-footer pb-4">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link font-size-lg text-white-50" data-toggle="tooltip"
                                                href="#" title="Facebook">
                                                <i class="fab fa-facebook-square"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link font-size-lg text-white-50" data-toggle="tooltip"
                                                href="#" title="Twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link font-size-lg text-white-50" data-toggle="tooltip"
                                                href="#" title="Google+">
                                                <i class="fab fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link font-size-lg text-white-50" data-toggle="tooltip"
                                                href="#" title="Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <ul class="nav nav-line mx-3 my-4" id="notifications-tabs-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="notifications-tab-1" data-toggle="tab"
                                        href="#notifications-content-1" role="tab" aria-controls="notifications-tab-1"
                                        aria-selected="false">
                                        Overview
                                        <div class="divider"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="notifications-tab-2" data-toggle="tab"
                                        href="#notifications-content-2" role="tab" aria-controls="notifications-tab-2"
                                        aria-selected="false">
                                        Sign in
                                        <div class="divider"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="notifications-tab-3" data-toggle="tab"
                                        href="#notifications-content-3" role="tab" aria-controls="notifications-tab-3"
                                        aria-selected="true">
                                        Recent Activity
                                        <div class="divider"></div>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content px-4">
                                <div class="tab-pane fade" id="notifications-content-1" role="tabpanel"
                                    aria-labelledby="notifications-content-1">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card card-box text-black-50 mb-5 p-3">
                                                <div class="display-3 text-black font-weight-bold">
                                                    31
                                                </div>
                                                <div
                                                    class="divider mt-2 mb-3 border-2 w-25 bg-first rounded border-first">
                                                </div>
                                                <div class="font-weight-bold font-size-sm text-uppercase">
                                                    Implemented
                                                    <br>
                                                    bugfixes
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card card-box text-black-50 mb-5 p-3">
                                                <div class="display-3 text-black font-weight-bold">
                                                    68
                                                </div>
                                                <div
                                                    class="divider mt-2 mb-3 border-2 w-25 bg-success rounded border-success">
                                                </div>
                                                <div class="font-weight-bold font-size-sm text-uppercase">
                                                    Unresolved
                                                    <br>
                                                    tickets
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card card-box text-black-50 mb-5 p-3">
                                                <div class="display-3 text-black font-weight-bold">
                                                    57
                                                </div>
                                                <div
                                                    class="divider mt-2 mb-3 border-2 w-25 bg-warning rounded border-warning">
                                                </div>
                                                <div class="font-weight-bold font-size-sm text-uppercase">
                                                    Support
                                                    <br>
                                                    requests
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-box mb-5">
                                        <div class="card-body">
                                            <div class="text-left">
                                                <div class="mt-1">
                                                    <i class="far fa-lemon font-size-xxl text-danger"></i>
                                                </div>
                                                <div class="mt-3 line-height-sm">
                                                    <b class="font-size-lg text-black">3,568</b>
                                                    <span class="text-black-50">clicks</span>
                                                </div>
                                            </div>
                                            <div class="progress mt-3">
                                                <div class="progress-bar" role="progressbar" style="width: 15%"
                                                    aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-primary mb-4" data-dismiss="modal"
                                        aria-label="Close">
                                        Close modal
                                    </button>
                                </div>
                                <div class="tab-pane fade" id="notifications-content-2" role="tabpanel"
                                    aria-labelledby="notifications-content-2">
                                    <div class="card m-0 shadow-none border-0">
                                        <div class="card-header d-block p-3 pt-0 rounded bg-light">
                                            <div class="text-muted text-center mb-3">
                                                <small>Sign in with</small>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-facebook mr-2" type="button">
                                                    <span class="btn-wrapper--icon">
                                                        <i class="fab fa-facebook"></i>
                                                    </span>
                                                    <span class="btn-wrapper--label">
                                                        Facebook
                                                    </span>
                                                </button>
                                                <button class="btn btn-twitter ml-2" type="button">
                                                    <span class="btn-wrapper--icon">
                                                        <i class="fab fa-twitter"></i>
                                                    </span>
                                                    <span class="btn-wrapper--label">
                                                        Twitter
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center text-muted mb-3">
                                                <small>Or sign in with credentials</small>
                                            </div>
                                            <form>
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="far fa-envelope"></i>
                                                            </span>
                                                        </div>
                                                        <input class="form-control" placeholder="Email" type="email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="fas fa-unlock-alt"></i>
                                                            </span>
                                                        </div>
                                                        <input class="form-control" placeholder="Password"
                                                            type="password">
                                                    </div>
                                                </div>
                                                <div class="custom-control custom-control-alternative custom-checkbox">
                                                    <input class="custom-control-input" id="customCheckLogin"
                                                        type="checkbox">
                                                    <label class="custom-control-label" for="customCheckLogin">
                                                        <span>Remember me</span>
                                                    </label>
                                                </div>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-second my-2">Sign
                                                        in</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="notifications-content-3" role="tabpanel"
                                    aria-labelledby="notifications-content-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card card-box mb-5">
                                                <div class="card-indicator bg-first"></div>
                                                <div class="card-body px-4 py-3">
                                                    <div class="pb-3 d-flex justify-content-between">
                                                        <a href="#">
                                                            Presentation site design
                                                        </a>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <div class="badge badge-first px-3">On hold</div>
                                                        <div class="font-size-sm text-danger px-2">
                                                            <i class="far fa-clock mr-1"></i>
                                                            14:22
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card card-box mb-5">
                                                <div class="card-indicator bg-success"></div>
                                                <div class="card-body px-4 py-3">
                                                    <div class="pb-3 d-flex justify-content-between">
                                                        <a href="#">
                                                            Create UI mockups
                                                        </a>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <div class="badge badge-success px-3">Fixed</div>
                                                        <div class="font-size-sm text-dark px-2">
                                                            <i class="far fa-clock mr-1"></i>
                                                            09:41
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
