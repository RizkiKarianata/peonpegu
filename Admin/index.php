<?php
if(!isset($_COOKIE["version"])) {
  header("location:../index");
}
include '../koneksi.php';
$id_user = $_COOKIE["version"];

$query = "SELECT * FROM tb_admin WHERE id_admin = '$id_user'";
$exe = mysqli_query($conn, $query);
$row = mysqli_fetch_array($exe);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Peonpegu</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/fav.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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
      <a href="index" class="brand-link">
        <img src="../assets/images/fav.png" alt="Peonpegu" class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight-light">Peonpegu</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../assets/images/akun/<?php echo $row['gambar'];?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="Akun/index" class="d-block"><script type="text/javascript">document.write(tampil2)</script></a>
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
                <a href="index" class="nav-link active">
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
                <a href="Pengguna/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Wisata/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wisata</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Berita/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Kategori/index" class="nav-link">
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
                <a href="Laporan/pendapatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendapatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Laporan/aktivitas" class="nav-link">
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
                <a href="Transaksi/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Komentar/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Komentar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Testimoni/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Testimoni</p>
                </a>
              </li> 
            </ul>
          </li>
          <li class="nav-item">
            <a href="../Proses/logout" class="nav-link">
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Halaman Utama</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index">Halaman Utama</a></li>
              <li class="breadcrumb-item active">Beranda</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
                $queryy = "SELECT COUNT(*) AS user FROM tb_user";
                $exee = mysqli_query($conn,$queryy);
                $data = mysqli_fetch_array($exee);
                ?>
                <h3><?php echo $data['user'];?></h3>

                <p>Data Pengguna</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="Pengguna/index" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                $queryy = "SELECT COUNT(*) AS wisata FROM tb_wisata";
                $exee = mysqli_query($conn,$queryy);
                $data = mysqli_fetch_array($exee);
                ?>
                <h3><?php echo $data['wisata'];?></h3>

                <p>Data Wisata</p>
              </div>
              <div class="icon">
                <i class="ion ion-camera"></i>
              </div>
              <a href="Wisata/index" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <?php 
                $queryy = "SELECT COUNT(*) AS berita FROM tb_berita";
                $exee = mysqli_query($conn,$queryy);
                $data = mysqli_fetch_array($exee);
                ?>
                <h3><?php echo $data['berita'];?></h3>

                <p>Data Berita</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-book"></i>
              </div>
              <a href="Berita/index" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php 
                $queryy = "SELECT COUNT(*) AS transaksi FROM tb_transaksi";
                $exee = mysqli_query($conn,$queryy);
                $data = mysqli_fetch_array($exee);
                ?>
                <h3><?php echo $data['transaksi'];?></h3>

                <p>Data Transaksi</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-pie"></i>
              </div>
              <a href="Transaksi/index" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Pendapatan</h3>

                <div class="card-tools">
                  <?php 
                  $sql = mysqli_query($conn, "SELECT SUM(total_harga) AS jumlah_pendapatan FROM tb_transaksi");
                  $dataa = mysqli_fetch_array($sql);
                  echo "Rp. ".number_format($dataa['jumlah_pendapatan']);
                  ?>  
                </div>
              </div>
              <div class="card-body">
                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- PIE CHART -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Kategori Wisata</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Hak Cipta &copy; 2020 <a href="index">Peonpegu</a></strong>
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
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>

<script>
  var areaChartData = {
    labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
    datasets: [
    {
      label               : 'Total Pendapatan',
      backgroundColor     : 'rgba(60,141,188,0.9)',
      borderColor         : 'rgba(60,141,188,0.8)',
      pointRadius          : false,
      pointColor          : '#3b8bba',
      pointStrokeColor    : 'rgba(60,141,188,1)',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(60,141,188,1)',
      data                : [
      <?php
      $januari = mysqli_query($conn, "SELECT SUM(total_harga) AS januari FROM tb_transaksi WHERE MONTH(created) = 1");
      $jan = mysqli_fetch_array($januari);
      echo $jan['januari'];
      ?>,
      <?php
      $februari = mysqli_query($conn, "SELECT SUM(total_harga) AS februari FROM tb_transaksi WHERE MONTH(created) = 2");
      $feb = mysqli_fetch_array($februari);
      echo $feb['februari'];
      ?>,
      <?php
      $maret = mysqli_query($conn, "SELECT SUM(total_harga) AS maret FROM tb_transaksi WHERE MONTH(created) = 3");
      $mar = mysqli_fetch_array($maret);
      echo $mar['maret'];
      ?>,
      <?php
      $april = mysqli_query($conn, "SELECT SUM(total_harga) AS april FROM tb_transaksi WHERE MONTH(created) = 4");
      $apr = mysqli_fetch_array($april);
      echo $apr['april'];
      ?>,      
      <?php
      $mei = mysqli_query($conn, "SELECT SUM(total_harga) AS mei FROM tb_transaksi WHERE MONTH(created) = 5");
      $mey = mysqli_fetch_array($mei);
      echo $mey['mei'];
      ?>,
      <?php
      $juni = mysqli_query($conn, "SELECT SUM(total_harga) AS juni FROM tb_transaksi WHERE MONTH(created) = 6");
      $jun = mysqli_fetch_array($juni);
      echo $jun['juni'];
      ?>,
      <?php
      $juli = mysqli_query($conn, "SELECT SUM(total_harga) AS juli FROM tb_transaksi WHERE MONTH(created) = 7");
      $jul = mysqli_fetch_array($juli);
      echo $jul['juli'];
      ?>,
      <?php
      $agustus = mysqli_query($conn, "SELECT SUM(total_harga) AS agustus FROM tb_transaksi WHERE MONTH(created) = 8");
      $agu = mysqli_fetch_array($agustus);
      echo $agu['agustus'];
      ?>,
      <?php
      $september = mysqli_query($conn, "SELECT SUM(total_harga) AS september FROM tb_transaksi WHERE MONTH(created) = 9");
      $sep = mysqli_fetch_array($september);
      echo $sep['september'];
      ?>,
      <?php
      $oktober = mysqli_query($conn, "SELECT SUM(total_harga) AS oktober FROM tb_transaksi WHERE MONTH(created) = 10");
      $okt = mysqli_fetch_array($oktober);
      echo $okt['oktober'];
      ?>,
      <?php
      $november = mysqli_query($conn, "SELECT SUM(total_harga) AS november FROM tb_transaksi WHERE MONTH(created) = 11");
      $nov = mysqli_fetch_array($november);
      echo $nov['november'];
      ?>,
      <?php
      $desember = mysqli_query($conn, "SELECT SUM(total_harga) AS desember FROM tb_transaksi WHERE MONTH(created) = 12");
      $des = mysqli_fetch_array($desember);
      echo $des['desember'];
      ?>,
      ]
    },
    ]
  }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp1 = areaChartData.datasets[0]
    barChartData.datasets[0] = temp1

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = {
      labels: [
      'Sumatra', 
      'Jawa',
      'Kalimantan', 
      'Sulawesi', 
      'Papua', 
      ],
      datasets: [
      {
        data: [
        <?php 
        $sumatra = mysqli_query($conn,"SELECT * FROM tb_wisata WHERE id_kategori ='1'");
        echo mysqli_num_rows($sumatra);
        ?>, 
        <?php 
        $jawa = mysqli_query($conn,"SELECT * FROM tb_wisata WHERE id_kategori='2'");
        echo mysqli_num_rows($jawa);
        ?>,
        <?php 
        $kalimantan = mysqli_query($conn,"SELECT * FROM tb_wisata WHERE id_kategori='3'");
        echo mysqli_num_rows($kalimantan);
        ?>, 
        <?php 
        $sulawesi = mysqli_query($conn,"SELECT * FROM tb_wisata WHERE id_kategori='4'");
        echo mysqli_num_rows($sulawesi);
        ?>,
        <?php 
        $papua = mysqli_query($conn,"SELECT * FROM tb_wisata WHERE id_kategori='5'");
        echo mysqli_num_rows($papua);
        ?>
        ],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
      }
      ]
    }

    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })

  </script>
</body>
</html>
