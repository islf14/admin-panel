<!DOCTYPE html>
<html lang="en">
 
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 01:54:28 GMT -->
<head>
    
    <meta charset="utf-8" />
    <title>Dashboard | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('panel/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('panel/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('panel/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('panel/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">
          @include('layouts.header')
            
          @include('layouts.aside')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                @yield('content')

                @include('layouts.modal')

                @include('layouts.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @include('layouts.asideright')

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('panel/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('panel/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('panel/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('panel/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('panel/libs/node-waves/waves.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('panel/libs/apexcharts/apexcharts.min.js')}}"></script>

        <script src="{{asset('panel/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('panel/js/app.js')}}"></script>
   
    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 01:56:06 GMT -->
</html>