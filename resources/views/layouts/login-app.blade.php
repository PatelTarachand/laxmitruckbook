<!DOCTYPE html>
    <html lang="en">
<head>
        <meta charset="utf-8" />
        <title>ERP Truckbook Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="{{ asset('dashboard/assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{ asset('dashboard/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('dashboard/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

        <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
       
       
        @yield('body')


       

     <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="{{ asset('dashboard/assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/app.min.js') }}"></script>

        <!-- third party js -->
        <script src="{{ asset('dashboard/assets/js/vendor/apexcharts.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="dashboard/assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{ asset('dashboard/assets/js/pages/demo.dashboard.js') }}"></script>
        <!-- end demo js-->
    </body>

</html>