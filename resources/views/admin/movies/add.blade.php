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
                                    <li class="breadcrumb-item active" aria-current="page">Movies table</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">ADD</li>
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
                            <h6 class="mb-0 text-uppercase">Movies ADD</h6>
                            <hr>
                            <div class="card">
                                <div class="card-body">
                                    <div class="p-4 border rounded">
                                        <form class="row g-3 needs-validation" action="{{ route('madd') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <img id="previewIMG"
                                                    style="display: block;
                                                       margin-left: auto;
                                                       margin-right: auto;"
                                                    class="center"
                                                    src="{{ URL::to('assets/images/No-Image-Placeholder.png') }}"
                                                    width="20%">
                                                <br>
                                                <input type="file" id="films_poster" name="films_poster"
                                                    onchange="previewFile(this);" required
                                                    class="form-control image-preview"
                                                    accept=".jpg, .png, image/jpeg, image/png">
                                            </div>
                                            <hr>
                                            <div class="col-md-6">
                                                <label class="form-label">Movie
                                                    name</label>
                                                <input type="text" class="form-control" id="films_name"
                                                    name="films_name" placeholder="movie name">
                                            </div>
                                            <div class="col-md-8">
                                                <label class="form-label">genre</label>
@foreach ($genre as $item)
    
@endforeach
                                                <input type="text" class="form-control" id="films_genre"
                                                    name="films_genre" placeholder="Genre">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Length</label>
                                                <div class="input-group"> <input type="number" class="form-control"
                                                        id="films_length" name="films_length" placeholder="Length">
                                                    <span class="input-group-text">ms</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Date
                                                    release</label>
                                                <input type="date" class="form-control" id="films_release"
                                                    name="films_release">
                                            </div>
                                            <div class="col-md-8">
                                                <label class="form-label">Trailer link</label>
                                                <input type="text" class="form-control" id="films_trailer"
                                                    name="films_trailer" placeholder="link trailer">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Description</label>
                                                <textarea type="text" class="form-control" id="films_description" name="films_description"
                                                    placeholder="description"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Create</button>
                                                <button type="reset"
                                                    class="btn btn-outline-secondary">Cancel</button>
                                            </div>
                                        </form>
                                        @include('public.alert')

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
    <script>
        function previewFile(input) {
            var file = $(".image-preview").get(0).files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    $("#previewIMG").attr("src", reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>
