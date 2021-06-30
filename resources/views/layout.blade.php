<!DOCTYPE html>
<html lang="en">
<x-head/>
<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
@yield("main")
    <!-- Navbar -->
    <x-nav/>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <x-sidebar/>
    <!-- Content Wrapper. Contains page content -->

    <x-content/>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <x-aside/>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <x-footer/>
</div>
<!-- ./wrapper -->

<x-script/>
</body>
</html>
