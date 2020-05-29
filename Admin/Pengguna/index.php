<?php
if(!isset($_COOKIE["version"])) {
    header("location:../../index");
}
include '../../koneksi.php';
$id_user = $_COOKIE["version"];
$query = "SELECT * FROM tb_admin WHERE id_admin = '$id_user'";
$exe = mysqli_query($conn, $query);
$data = mysqli_fetch_array($exe);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Peonpegu</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../../assets/images/fav.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <script type="text/javascript">
    var tampil = localStorage.getItem('id_user');
    var tampil2 = localStorage.getItem('username');
  </script>
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../index" class="brand-link">
        <img src="../../assets/images/fav.png" alt="Peonpegu" class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight-light">Peonpegu</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../assets/images/akun/<?php echo $data['gambar'];?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="../Akun/index" class="d-block"><script type="text/javascript">document.write(tampil2)</script></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Halaman Utama
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../index" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Beranda</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Menu</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Wisata/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wisata</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Berita/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Kategori/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Laporan/pendapatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendapatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Laporan/aktivitas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aktivitas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Tambahan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Transaksi/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Komentar/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Komentar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Testimoni/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Testimoni</p>
                </a>
              </li> 
            </ul>
          </li>
          <li class="nav-item">
            <a href="../../Proses/logout" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Keluar</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index">Beranda</a></li>
              <li class="breadcrumb-item active">Pengguna</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a href="tambah-pengguna" class="btn btn-primary">Tambah</a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $query = "SELECT * FROM tb_user ORDER BY id_user ASC";
                  $exe = mysqli_query($conn, $query);
                  while($row = mysqli_fetch_array($exe)) {
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $row['nama_lengkap'];?></td>
                    <td><a href="detail-pengguna?id=<?php echo $row['id_user'];?>" class="btn btn-secondary">Detail</a></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Hak Cipta &copy; 2020 <a href="../index">Peonpegu</a></strong>
    oleh Coretan Code
    <div class="float-right d-none d-sm-inline-block">
      <b>Versi</b> 1.3.1
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
<script src="../../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
