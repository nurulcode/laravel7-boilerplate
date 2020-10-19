<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets\images\favicon.ico') }}" />

    <link rel="shortcut icon" href="assets\images\favicon.ico">
    <!-- Plugins css -->

    <link href="{{ asset('plugins\datatables\dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins\datatables\buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="{{ asset('plugins\datatables\responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('plugins\bootstrap-colorpicker\css\bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins\bootstrap-datepicker\dist\css\bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins\select2\css\select2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins\bootstrap-touchspin\css\jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet">
    <!--Chartist Chart CSS -->
    <link href="{{ asset('assets\css\bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets\css\metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets\css\icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets\css\style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets\css\iziToast.css') }}" rel="stylesheet" type="text/css" />


    <style>
        .btn-outline {
            color: #353958;
            background-color: #f1f1f1;
            border-color: #b8bce0;
            border-radius: 0;
        }

        .btn-outline:hover,
        .btn-outline:active,
        .btn-outline:focus,
        .btn-outline.active {
            background: #a9afe4;
            color: #ffffff;
            border-color: #a9afe4;

        }

        /* for demo purpose only */

        body {
            padding: 20px 0;
            font-family: Roboto, sans-serif;
        }

        h1 {
            font-weight: 300;
            margin-bottom: 40px;
        }

        .content-page .content {
            padding: 0 15px 10px 15px;
            margin-top: 40px;
            margin-bottom: 60px
        }

        .page-title-box {
            padding: 15px 0
        }

    </style>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    <span>
                        <h5 class="text-secondary" height="18">{{ config('app.name', 'Laravel') }}</h5>
                    </span>
                    <i>
                        <img src="{{ asset('assets\images\logo-sm.png') }}" alt="" height="22" />
                    </i>
                </a>
            </div>

         @include('layouts.navbar')
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.sidebar');
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    {{-- <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">@yield('page-title')</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Validation</li>
                                </ol>
                            </div>
                        </div>
                    </div> --}}
                    <!-- end row -->
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- content -->
            <footer class="footer block">
                © 2019 Veltrix <span class="d-none d-sm-inline-block">
                    <i class="mdi mdi-heart text-danger"></i> Themesbrand
                </span>.
            </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <!-- jQuery  -->
    <script src="{{ asset('assets\js\jquery.min.js') }}"></script>
    <script src="{{ asset('assets\js\bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets\js\metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets\js\jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets\js\waves.min.js') }}"></script>
    <script src="{{ asset('assets\js\iziToast.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('plugins\bootstrap-colorpicker\js\bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('plugins\bootstrap-datepicker\js\bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('plugins\select2\js\select2.min.js') }}"></script>
    <script src="{{ asset('plugins\bootstrap-maxlength\bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('plugins\bootstrap-filestyle\js\bootstrap-filestyle.min.js') }}"></script>
    <script src="{{ asset('plugins\bootstrap-touchspin\js\jquery.bootstrap-touchspin.min.js') }}"></script>
    <!-- Plugins Init js -->
    <script src="{{ asset('assets\pages\form-advanced.js') }}"></script>
    <!-- Required datatable js -->
    <script src="{{ asset('plugins\datatables\jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins\datatables\dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('plugins\datatables\dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins\datatables\buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins\datatables\jszip.min.js') }}"></script>
    <script src="{{ asset('plugins\datatables\pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins\datatables\vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins\datatables\buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins\datatables\buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins\datatables\buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('plugins\datatables\dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins\datatables\responsive.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('plugins\parsleyjs\parsley.min.js') }}"></script>
    <script src="{{ asset('assets\js\iziToast.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets\pages\datatables.init.js') }}"></script>
    @yield('javascript')
    <!--App-->
    <script src="{{ asset('assets\js\app.js') }}"></script>
</body>

</html>
