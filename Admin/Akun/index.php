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
            <a href="index" class="d-block"><script type="text/javascript">document.write(tampil2)</script></a>
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
                <a href="../Pengguna/index" class="nav-link">
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
            <h1>Akun</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index">Beranda</a></li>
              <li class="breadcrumb-item active">Akun</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                  src="../../assets/images/akun/<?php echo $data['gambar'];?>"
                  alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $data['nama_lengkap'];?></h3>

                <p class="text-muted text-center">@<?php echo $data['username'];?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Pengikut</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Mengikuti</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Teman</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="https://www.instagram.com/mr.nata007/" class="btn btn-primary btn-block"><b>Ikuti</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Data Diri</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">

                  <div class="active tab-pane" id="settings">
                    <form class="form-horizontal" action="Proses/update" method="POST" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input type="hidden" name="id_admin" value="<?php echo $data['id_admin'];?>">
                          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $data['nama_lengkap'];?>" required="" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Alamat Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" value="<?php echo $data['email'];?>" required="" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Telepon" value="<?php echo $data['no_hp'];?>" required="" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $data['tgl_lahir'];?>" required="" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="gambar" class="col-sm-2 col-form-label">Foto Profil</label>
                        <div class="col-sm-10 input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" required="" id="gambar" name="gambar" value="<?php echo $row['gambar'];?>">
                            <label class="custom-file-label" for="gambar">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" required=""> Saya setuju dengan <a href="#">syarat dan ketentuan</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<script src="../../Assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../Assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="../../Assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../Assets/dist/js/demo.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>
</body>
</html>
