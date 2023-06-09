<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.header')
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!--sidebar-wrapper-->
        @include('admin.sidebar')
        <!--end sidebar-wrapper-->
        <!--header-->
        @include('admin.navbar')
        <!--end header-->
        <!--page-wrapper-->
        <div class="page-wrapper">
            <!--page-content-wrapper-->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Account</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Account table</li>
                                </ol>
                            </nav>
                        </div>
						<div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Settings</button>
                                <button type="button"
                                    class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a
                                        class="dropdown-item" href="javascript:;">Action</a>
                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                    <div class="dropdown-divider"></div> <a class="dropdown-item"
                                        href="javascript:;">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-9 mx-auto">
                            <h6 class="mb-0 text-uppercase">Account detail</h6>
                            <hr>
                            <div class="card">
                                <div class="card-body">
                                    <div class="p-4 border rounded">
                                        @foreach ($users as $item)
                                            <form class="row g-3 needs-validation"
                                                action="{{ URL::to('update/' . $item->UserID) }}" method="POST">
                                                @csrf
                                                <div class="col-md-4">
                                                    <label for="validationCustom01" class="form-label">ID</label>
                                                    <input disabled type="text" class="form-control" id="UserID"
                                                        name="" value="{{ $item->UserID }}">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom02" class="form-label">ROLE</label>
                                                    <input disabled type="text" class="form-control" id="role"
                                                        @if ($item->role === '1') value="admin" 
												@else
													value="users" @endif>
                                                </div>
                                                <hr>
                                                <div class="col-md-4">
                                                    <label for="validationCustomUsername"
                                                        class="form-label">Username</label>

                                                    <input type="text" class="form-control" id="username"
                                                        name="username" value="{{ $item->username }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="validationCustomUsername"
                                                        class="form-label">Password</label>

                                                    <input type="text" class="form-control" id="password"
                                                        name="password" value="{{ $item->password }}">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustomUsername"
                                                        class="form-label">Number</label>
                                                    <div class="input-group has-validation"> <span
                                                            class="input-group-text"
                                                            id="inputGroupPrepend">VN(84+)</span>
                                                        <input type="text" class="form-control" id="sdt"
                                                            aria-describedby="inputGroupPrepend" name="sdt"
                                                            value="{{ $item->sdt }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="validationCustom03" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="email"
                                                        name="email" value="{{ $item->email }}">
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary" type="submit">Update</button>
                                                    <button type="reset"
                                                        class="btn btn-outline-secondary">Cancel</button>
                                                </div>
                                            </form>
                                            @include('public.alert')
                                        @endforeach
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
            <!--end page-content-wrapper-->
        </div>
        <!--end page-wrapper-->
        <!--start overlay-->
        <div class="overlay toggle-btn-mobile"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--footer -->
        <div class="footer">
            <p class="mb-0">Syndash @2020 | Developed By : <a href="https://themeforest.net/user/codervent"
                    target="_blank">codervent</a>
            </p>
        </div>
        <!-- end footer -->
    </div>
    <!-- end wrapper -->
    <!--start switcher-->
    <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
                class="bx bx-cog bx-spin"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
            tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <h6 class="mb-0">Theme Variation</h6>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="lightmode"
                        value="option1" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darkmode"
                        value="option2">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darksidebar"
                        value="option3">
                    <label class="form-check-label" for="darksidebar">Semi Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ColorLessIcons"
                        value="option3">
                    <label class="form-check-label" for="ColorLessIcons">Color Less Icons</label>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->
    <!-- JavaScript -->
    <!-- Bootstrap JS -->

    @include('admin.footer')
</body>

</html>
