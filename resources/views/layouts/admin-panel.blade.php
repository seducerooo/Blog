<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Blank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    @include('layouts.admin-panel_includes.admin_panel-header')
    @yield('header')



</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        @include('layouts.admin-panel_includes.admin_panel-sidebar_brand')

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menuu -->
{{--        @include('layouts.admin-panel_includes.nav_item.admin_panel-nav_item-collapse_menuu')--}}

{{--        <!-- Nav Item - Utilities Collapse Menu -->--}}
{{--        @include('layouts.admin-panel_includes.nav_item.admin_panel-nav_item-utilities_collapse_menu')--}}

    <!-- Nav Item - Pages Collapse User -->
    @include('layouts.admin-panel_includes.admin_panel-nav_item-collapse_user')


    <!-- Nav Item - Pages Collapse Post -->
    @include('layouts.admin-panel_includes.admin_panel-nav_item-collapse_post')

    <!-- Nav Item - Pages Collapse Post -->
    @include('layouts.admin-panel_includes.admin_panel-nav_item-collapse_role')


    <!-- Nav Item - Pages Collapse Post -->
    @include('layouts.admin-panel_includes.admin_panel-nav_item-collapse_permission')
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        @include('layouts.admin-panel_includes.nav_item.admin_panel-nav_item-pages_collapse_menu')

        <!-- Nav Item - Charts -->
       @include('layouts.admin-panel_includes.nav_item.admin_panel-nav_item-charts')

        <!-- Nav Item - Tables -->
        @include('layouts.admin-panel_includes.nav_item.admin_panel-nav_item-tables')

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                @include('layouts.admin-panel_includes.admin_panel-sidebar_toggle')

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    @include('layouts.admin-panel_includes.nav_item.admin_panel-nav_item-search_dropdown')


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->

                    @include('layouts.admin-panel_includes.nav_item.admin_panel-nav_item-user_information')

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                @yield('content')


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


        <!-- Footer -->
       @include('layouts.admin-panel_includes.admin_panel-main_footer')
        <!-- End of Footer -->


    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
@include('layouts.admin-panel_includes.admin_panel-logout_modal')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


@yield('footer')


@include('layouts.admin-panel_includes.admin_panel-footer')


</body>

</html>
