<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FYP-MS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('boot/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('boot/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('boot/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('boot/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('boot/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('boot/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('boot/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('boot/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('boot/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('boot/images/favicon.png')}}">
</head>

<body>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
            </div>
            <div>
                <H2 style="font-weight:bold; font-size:20px;"> FYP-MS </H2>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
            <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                @auth
                <x-app-layout></x-app-layout>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                    in</a>&nbsp &nbsp &nbsp
                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth

                @endif
            </ul>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">

                <li class="nav-item">
                    <a class="nav-link" href="/redirect">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                
                <li class="nav-item nav-category">Project</li>

                <li class="nav-item">
                    <a class="nav-link" href="/viewallproject">
                        <i class="menu-icon mdi mdi-account-circle-outline"></i>
                        <span class="menu-title">All Project</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/viewproject">
                        <i class="menu-icon mdi mdi-account-circle-outline"></i>
                        <span class="menu-title">Supervisee</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="/viewprojectexaminee">
                        <i class="menu-icon mdi mdi-account-circle-outline"></i>
                        <span class="menu-title">Examinee</span>
                    </a>
                </li>

            </ul>
        </nav>

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="home-tab">

                            @yield('xxx')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('boot/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('boot/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('boot/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('boot/vendors/progressbar.js/progressbar.min.js')}}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('boot/js/off-canvas.js')}}"></script>
    <script src="{{asset('boot/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('boot/js/template.js')}}"></script>
    <script src="{{asset('boot/js/settings.js')}}"></script>
    <script src="{{asset('boot/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('boot/js/jquery.cookie.js" type="text/javascript')}}"></script>
    <script src="{{asset('boot/js/dashboard.js')}}"></script>
    <script src="{{asset('boot/js/Chart.roundedBarCharts.js')}}"></script>
    <!-- End custom js for this page-->
</body>

</html>