
<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.layouts.style-dashboard')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Preloader -->
    @include('admin.layouts.loader-dashboard')
<!-- Navbar -->
    @include('admin.layouts.nav-dashboard')
<!-- /.navbar -->
<!-- Main Sidebar Container -->
    @include('admin.layouts.aside-dashboard')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
        </div>

        <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
        </section>
    </div>
<!-- /.content-wrapper -->
    @include('admin.layouts.footer-dashboard')

<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.layouts.scripts-dashboard')
</body>
</html>
