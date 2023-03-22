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
                        <div class="breadcrumb-title pe-3">Movie</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Movie table</li>
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
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0 inline-blk" style="display:inline-block">Movies</h4>
                                
                                <div class="" style="float: right;display:inline-block">
                                    <a href="{{ route('madd') }}"
                                        title="Thêm"class="btn btn-sm btn-success px-4"><i
                                            class='bx bx-plus me-1'></i></a>
                                </div>
                               
                            </div>
                            <hr />
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Poster</th>
                                            <th>Name</th>
                                            <th>Date realease</th>
                                            <th>genre</th>
                                            <th>Length</th>
                                            <th>tool</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($films as $item)
                                            <tr>
                                                <td>
                                                    <img src=" {{ URL::to('uploads/movies/' . $item->films_poster) }}"
                                                        alt="image" width="70">
                                                </td>
                                                <td>{{ $item->films_name }}</td>
                                                <td>{{ $item->films_release }}</td>
                                                <td>{{ $item->films_genre }}</td>
                                                <td>{{ $item->films_length }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-default">
                                                        <a href="{{ url('mupdate/' . $item->films_id) }}"><i
                                                                class="fa fa-edit"></i></a>
                                                    </button>
                                                    <button class="btn btn-sm btn-default">
                                                        <a href="{{ url('movies/' . $item->films_id) }}"
                                                            onclick="functionDelete(event)"><i class="fa fa-trash"></i>
                                                        </a>
                                                    </button>
                                            </tr>
                                            </td>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Poster</th>
                                            <th>Name</th>
                                            <th>Date realease</th>
                                            <th>genre</th>
                                            <th>Length</th>
                                            <th>tool</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
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
    <script>
        $(document).ready(function() {
            //Default data table
            $('#example').DataTable();
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
            });
            table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
    @include('public.alert')
    <!-- App JS -->
    <script src="assets/js/app.js"></script>
</body>

</html>
