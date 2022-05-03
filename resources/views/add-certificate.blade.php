<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kvthemes.com/bangodash/color-version/form-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:31:50 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BangoDash Bootstrap Admin Template</title>
    <!--favicon-->
    <link rel="icon" href="erp/images/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="erp/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="erp/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="erp/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="erp/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="erp/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="erp/css/app-style.css" rel="stylesheet" />

</head>

<body>

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('sidebar')
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('header')
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumb-->

                <!-- End Breadcrumb-->
                <form action="{{ url('certificate') }}" method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header text-uppercase">Text Input</div>
                                <div class="card-body">
                                    <div class="row mt-3">

                                        <div class="col-md-4">
                                            <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">
                                            <label>Enter Course Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Course Name"
                                                name="Course_name" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Enter DoS Number</label>
                                            <input type="text" class="form-control" placeholder="Enter DoS Number"
                                                name="DoS_number" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Enter Certificate Number</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter Certificate Number" name="Certificate_number">
                                        </div>

                                    </div>

                                    <div class="row mt-3">

                                        <div class="col-md-4">
                                            <label>Enter Date of Issue</label>
                                            <input type="date" class="form-control" placeholder="Enter Date of Issue"
                                                name="Date_of_issue" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Enter Date of Expire</label>
                                            <input type="date" class="form-control" placeholder="Enter Date of Expire"
                                                name="Date_of_expire" required>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!--End Row-->

                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-uppercase">Textarea</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="basic-textarea">BASIC TEXTAREA</label>
                                        <textarea rows="4" class="form-control" id="basic-textarea"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="placeholder-textarea">TEXTAREA WITH PLACEHOLDER</label>
                                        <textarea rows="4" class="form-control" id="placeholder-textarea" placeholder="textarea with placeholder"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="discription-textarea">TEXTAREA WITH DISCRIPTION</label>
                                        <textarea rows="4" class="form-control" id="discription-textarea" placeholder="textarea with discription"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-uppercase">Select Input</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="basic-select">BASIC SELECT</label>
                                        <select class="form-control" id="basic-select">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="custom-select">CUSTOM SELECT</label>
                                        <select class="form-control" id="custom-select">
                                            <option>Delhi</option>
                                            <option>Noida</option>
                                            <option>Ghaziabad</option>
                                            <option>Bangalore</option>
                                            <option>Mumbai</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="multiple-select">MULTIPLE SELECT</label>
                                        <select multiple="multiple" class="form-control" id="multiple-select">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-uppercase">Inputs Sizing Options</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Xlarge-input">Extra large input</label> <code>.form-control
                                            .form-control-xl</code>
                                        <input type="text" class="form-control form-control-xl" id="Xlarge-input">
                                        <br>
                                        <label for="large-input">Large input</label> <code>.form-control
                                            .form-control-lg</code>
                                        <input type="text" class="form-control form-control-lg" id="large-input">
                                        <br>
                                        <label for="default-input">Default input</label><code>.form-control</code>
                                        <input type="text" class="form-control" id="default-input">
                                        <br>
                                        <label for="small-input">Small input</label> <code>.form-control
                                            .form-control-sm</code>
                                        <input type="text" class="form-control form-control-sm" id="small-input">
                                    </div>

                                    <div class="col-md-6">

                                        <label for="Xlarge-input-select">Extra large input Select</label>
                                        <code>.form-control .form-control-xl</code>
                                        <select class="form-control form-control-xl" id="Xlarge-input-select">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>
                                        <br>
                                        <label for="large-input-select">Large input Select</label>
                                        <code>.form-control .form-control-lg</code>
                                        <select class="form-control form-control-lg" id="large-input-select">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>
                                        <br>
                                        <label for="default-input-select">Default input Select</label>
                                        <code>.form-control</code>
                                        <select class="form-control" id="default-input-select">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>
                                        <br>
                                        <label for="small-input-select">Small input Select</label>
                                        <code>.form-control .form-control-sm</code>
                                        <select class="form-control form-control-sm" id="small-input-select">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                        </select>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-uppercase">Inputs With Icons</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Left icon input</label> <code>.has-icon-left</code>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" class="form-control">
                                            <div class="form-control-position">
                                                <i class="fa fa-search text-info"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <label>Right icon input</label> <code>.has-icon-right</code>
                                        <div class="position-relative has-icon-right">
                                            <input type="text" class="form-control">
                                            <div class="form-control-position">
                                                <i class="fa fa-upload text-warning"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">

                                    <div class="col-md-6">
                                        <label>Round input with left icon</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" class="form-control form-control-rounded">
                                            <div class="form-control-position">
                                                <i class="fa fa-user-o text-danger"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <label>Round input with right icon</label>
                                        <div class="position-relative has-icon-right">
                                            <input type="text" class="form-control form-control-rounded">
                                            <div class="form-control-position">
                                                <i class="fa fa-bell-o text-success"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label>Square input with left icon</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" class="form-control form-control-square">
                                            <div class="form-control-position">
                                                <i class="fa fa-spinner fa-spin text-primary"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <label>Square input with right icon</label>
                                        <div class="position-relative has-icon-right">
                                            <input type="text" class="form-control form-control-square">
                                            <div class="form-control-position">
                                                <i class="fa fa-refresh fa-spin fa-fw text-dark"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> --}}
                <!--End Row-->

            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2018 BangoDash Admin
                </div>
            </div>
        </footer>
        <!--End footer-->

    </div>
    <!--End wrapper-->


    <!-- Bootstrap core JavaScript-->
    <script src="erp/js/jquery.min.js"></script>
    <script src="erp/js/popper.min.js"></script>
    <script src="erp/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="erp/plugins/simplebar/js/simplebar.js"></script>
    <!-- waves effect js -->
    <script src="erp/js/waves.js"></script>
    <!-- sidebar-menu js -->
    <script src="erp/js/sidebar-menu.js"></script>
    <!-- Custom scripts -->
    <script src="erp/js/app-script.js"></script>

</body>

<!-- Mirrored from kvthemes.com/bangodash/color-version/form-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 13:31:50 GMT -->

</html>
