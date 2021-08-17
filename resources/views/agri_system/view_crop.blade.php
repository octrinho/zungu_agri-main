<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agribusiness Investment Consultancy</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('agri_system/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('agri_system/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('agri_system/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('agri_system/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('agri_system/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <a href="/">
        <span class="brand-text font-weight-light"><strong> Back to Website </strong></span>
      </a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('agri_system/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('agri_system/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a>
         
          </li>
          <!-- Farm panel -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Farms
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_farm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Farm </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_crop" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Farms</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Crops panel -->
          <li class="nav-item has-treeview">
            <a href="crops" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Crops
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_crop" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Crop </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_crop" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Crops</p>
                </a>
              </li>
            </ul>
          </li>
 
          <!-- Crops Pesticides panel -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Crops Pesticides
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_crop_pesticide" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Crop Pesticide </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_crops_pesticide" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Crops Pesticide</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Crops Pests -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Crops Pests
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_crop_pests" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Crop Pests</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_crops_pests" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Crops Pests</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Harvest panel -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Harvest
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_harvest" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Harvest </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_harvest" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Harvests</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Seed panel -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Seed
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_seed" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Seed </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_seeds" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Seeds</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Crop Records</h3>
                </div>
                <!-- ./card-header -->
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Crop ID</th>
                        <th>Crop Name</th>
                        <th>Soil Type</th>
                        <th>Rainfall</th>
                        <th>Temperature</th>
                        <th>Fertilizer</th>
                        <th>Season</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($crops as $crop)
                      <tr>
                        <td>{{ $crop->id }}</td>
                        <td>{{ $crop->crop_name }}</td>
                        <td>{{ $crop->soil_type }}</td>
                        <td>{{ $crop->rainfall }} </td>
                        <td>{{ $crop->temperature }}</td>
                        <td>{{ $crop->fertilizer }}</td>
                        <td>{{ $crop->period }}</td>
                      </tr> 
                        @endforeach                    
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Crop ID</th>
                        <th>Crop Name</th>
                        <th>Soil Type</th>
                        <th>Rainfall</th>
                        <th>Temperature</th>
                        <th>Fertilizer</th>
                        <th>Season</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- Form Element sizes -->
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Different Height</h3>
                </div>
                <div class="card-body">
                  <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                  <br>
                  <input class="form-control" type="text" placeholder="Default input">
                  <br>
                  <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{asset('agri_system/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('agri_system/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('agri_system/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('agri_system/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('agri_system/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('agri_system/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('agri_system/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('agri_system/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('agri_system/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('agri_system/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('agri_system/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('agri_system/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('agri_system/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('agri_system/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('agri_system/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('agri_system/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
