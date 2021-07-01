<!DOCTYPE html>
<html>
<x-head/>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <x-nav/>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <x-sidebar/>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1345.6px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12" style="text-align: center">
                        <h1>Add Categories</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Thêm mới danh mục</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{url("/categories/save")}}" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <x-footer/>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<x-script/>
</body>
</html>


