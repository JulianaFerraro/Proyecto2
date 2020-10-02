<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>MAKEITEASY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" href="{{ url('bootstrap-4.5/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('https://use.fontawesome.com/releases/v5.0.6/css/all.css') }}">
    

</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

@include('layouts.users.components.navbar')

@include('layouts.users.components.sidebar')

<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">



                @yield('content')


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date()())</script>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

@include('layouts.users.components.aside')

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<script src="{{ url('js/app.js') }}"></script>
<script src="{{ url('bootstrap-4.5/js/bootstrap.js') }}"></script>
<script src="{{ url('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{ url('bootstrap-4.5/js/bootstrap.bundle.js') }}"></script>

</body>
</html>
