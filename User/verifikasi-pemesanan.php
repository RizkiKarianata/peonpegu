<?php
include '../koneksi.php';
$id = $_COOKIE['wisata'];
$id_user = $_COOKIE['version'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="../assets/images/fav.png" type="image/png">
  <title>Peonpegu</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/dist-2/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/dist-2/vendors/linericon/style.css">
  <link rel="stylesheet" href="../assets/dist-2/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/dist-2/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/dist-2/vendors/lightbox/simpleLightbox.css">
  <link rel="stylesheet" href="../assets/dist-2/vendors/nice-select/css/nice-select.css">
  <link rel="stylesheet" href="../assets/dist-2/vendors/animate-css/animate.css">
  <!-- main css -->
  <link rel="stylesheet" href="../assets/dist-2/css/style.css">
  <link rel="stylesheet" href="../assets/dist-2/css/responsive.css">
</head>
<body>
    <script type="text/javascript">
        var tampil = localStorage.getItem('id_user');
        var tampil2 = localStorage.getItem('username');
    </script>
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <a class="navbar-brand logo_h" href="index"><img src="../assets/images/logo-home.png" alt="" style="width: 249px;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" href="tentang">Tentang</a></li>
                            <li class="nav-item"><a class="nav-link" href="kontak">Kontak</a></li>
                            <li class="nav-item active"><a class="nav-link" href="layanan">Layanan</a></li>
                            <li class="nav-item"><a class="nav-link" href="berita">Berita</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><script type="text/javascript">document.write(tampil2)</script></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="akun">Akun</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../Proses/logout.php">Keluar</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </div>
    </header>

<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
     <div class="banner_content text-center">
      <div class="page_link">
       <a href="index">Beranda</a>
       <a href="booking-wisata?id=<?php echo $id;?>">Booking Wisata</a>
       <a href="verifikasi-pemesanan">Verifikasi</a>
     </div>
     <h2>Verifikasi Pemesanan</h2>
   </div>
 </div>
</div>
</section>

<!-- Start Align Area -->
<div class="whole-wrap">
  <div class="container">
    <div class="section-top-border">
      <h3 class="mb-30 title_color">Sedikit Cerita</h3>
      <div class="row">
        <div class="col-lg-12">
          <blockquote class="generic-blockquote">
            “Perkenalkan nama saya Moehammad Rizki Karianata selaku pemilik perusahaan Peonpegu. Sebelumnya saya ucapkan terimakasih banyak kepada masyarakat Indonesia yang telah mendukung pengembangan program kami. Disini saya akan bercerita sedikit tentang kehidupan saya di masa lalu. Pertama sewaktu kecil saya bersekolah di SD Negeri 1 Pandanlandung, dan saat masih berseragam merah putih saya juga tidak terlalu pintar ataupun cerdas. Setelah lulus SD saya melanjutkan sekolah di SMP Negeri 9 Malang. Disana saya mendapatkan pelajaran berharga bahwa menyenangkan seorang teman memanglah boleh tapi jangan sampai lupa untuk menyenangkan diri sendiri. Masa smp pun berakhir dan akhirnya saya masuk ke SMK Negeri 11 Malang serta mengambil jurusan Rekayasa Perangkat Lunak. Ada sebuah pesan dari seorang kakek yang membuat saya berubah menjadi seperti ini yaitu Pertama berbaktilah kepada orangtua terutama Ibu, karena dia(Ibu) telah membesarkan kamu dari kecil sampai tumbuh dewasa dan ia pun juga tidak meminta apa pun. Kedua jangan pernah tinggalkan sholat meskipun banyak pekerjaan. Ketiga saya lupa.” 
          </blockquote>
        </div>
      </div>
    </div>    
    <div class="section-top-border">
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <div class="card text-center">
            <div class="card-header">
              Selamat Datang
            </div>
            <form action="Proses/verifikasi-kode.php" method="POST">
              <div class="card-body">
                <h5 class="card-title">Kode Aktivasi</h5>
                <input type="number" class="form-control" id="kode" name="kode" placeholder="Masukkan Kode Aktivasi Dengan Benar" required="" autocomplete="off"><br>
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Kirim Kode">
              </div>
            </form>
            <div class="card-footer text-muted">
              www.peonpegu.com
            </div>
          </div>
        </div>
        <div class="col-md-4">
        </div>
      </div>
    </div>
    <div class="section-top-border">
      <h3 class="title_color">Galeri 2017 - 2018</h3>
      <div class="row gallery-item">
        <div class="col-md-4">
          <a href="../assets/images/galeri/Kiri.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../assets/images/galeri/Kiri.jpeg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="../assets/images/galeri/Tengah.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../assets/images/galeri/Tengah.jpeg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="../assets/images/galeri/Kanan.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../assets/images/galeri/Kanan.jpeg);"></div></a>
        </div>
        <div class="col-md-6">
          <a href="../assets/images/galeri/Ultah1~2.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../assets/images/galeri/Ultah1~2.jpeg);"></div></a>
        </div>
        <div class="col-md-6">
          <a href="../assets/images/galeri/Ultah2~2.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../assets/images/galeri/Ultah2~2.jpeg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="../assets/images/galeri/Farrah1.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../assets/images/galeri/Farrah1.jpeg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="../assets/images/galeri/Farrah3.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(../assets/images/galeri/Farrah3.jpg);"></div></a>
        </div>
        <div class="col-md-4">
          <a href="../assets/images/galeri/Farrah2.jpeg" class="img-gal"><div class="single-gallery-image" style="background: url(../assets/images/galeri/Farrah2.jpeg);"></div></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Align Area -->

    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Tentang Peonpegu</h6>
                        <p>Peonpegu adalah situs penyedia pemesanan tiket secara online yang bisa didapatkan dibeberapa wilayah yang terjangkau. Peonpegu juga memberikan dampak yang cukup besar karena dapat memudahkan pendaki Indonesia.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Menu Peonpegu</h6>
                        <div class="row">
                            <div class="col-4">
                                <ul class="list">
                                    <li><a href="index">Beranda</a></li>
                                    <li><a href="tentang">Tentang</a></li>
                                    <li><a href="kontak">Kontak</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list">
                                    <li><a href="http://betajaya.000webhostapp.com/">Betajaya</a></li>
                                    <li><a href="https://github.com/RizkiKarianata/Info-Covid-19">Covid-19</a></li>
                                    <li><a href="http://lokerpemimpi.000webhostapp.com/">Loker</a></li>
                                    <li><a href="http://wongjaim.000webhostapp.com/">Loker II</a></li>
                                </ul>
                            </div>                                      
                        </div>                          
                    </div>
                </div>                          
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Bantuan</h6>
                        <p>Jika mengalami kesulitan saat menggunakan Peonpegu mohon untuk segera konsultasi.</p>        
                        <div id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Masukkan Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Email '" required="" type="email" autocomplete="off">
                                    <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>     
                                </div>                                  
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title">Kiriman Instagram</h6>
                        <ul class="list instafeed d-flex flex-wrap">
                            <li><img src="../assets/images/instagram/Gambar1.jpeg" alt="" style="width: 58px;"></li>
                            <li><img src="../assets/images/instagram/Gambar3.jpg" alt="" style="width: 58px;"></li>
                            <li><img src="../assets/images/instagram/Gambar14.jpg" alt="" style="width: 58px;"></li>
                            <li><img src="../assets/images/instagram/Gambar15.jpg" alt="" style="width: 58px;"></li>
                            <li><img src="../assets/images/instagram/Gambar17.jpg" alt="" style="width: 58px;"></li>
                            <li><img src="../assets/images/instagram/Gambar24.jpg" alt="" style="width: 58px;"></li>
                            <li><img src="../assets/images/instagram/Gambar25.jpg" alt="" style="width: 58px;"></li>
                            <li><img src="../assets/images/instagram/Gambar26.jpg" alt="" style="width: 58px;"></li>
                        </ul>
                    </div>
                </div>                      
            </div>
            <div class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-md-8 footer-text m-0">
                    Hak Cipta &copy;<script>document.write(new Date().getFullYear());</script> Hak cipta dilindungi | Template ini dibuat <i class="fa fa-heart-o" aria-hidden="true"></i> oleh <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </p>
                <div class="col-lg-4 col-md-4 footer-social">
                    <a href="http://bit.ly/RizkiNataFB"><i class="fa fa-facebook"></i></a>
                    <a href="http://bit.ly/RizkiGH"><i class="fa fa-github"></i></a>
                    <a href="http://bit.ly/RizkiNataIG"><i class="fa fa-instagram"></i></a>
                    <a href="http://bit.ly/RizkiKarianata"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../assets/dist-2/js/jquery-3.2.1.min.js"></script>
  <!-- Library JavaScript -->
  <script src="../assets/dist-2/js/popper.js"></script>
  <script src="../assets/dist-2/js/bootstrap.min.js"></script>
  <script src="../assets/dist-2/js/stellar.js"></script>
  <script src="../assets/dist-2/vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="../assets/dist-2/vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="../assets/dist-2/vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/dist-2/vendors/isotope/isotope-min.js"></script>
  <script src="../assets/dist-2/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="../assets/dist-2/js/jquery.ajaxchimp.min.js"></script>
  <script src="../assets/dist-2/vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="../assets/dist-2/vendors/counter-up/jquery.counterup.js"></script>
  <script src="../assets/dist-2/js/mail-script.js"></script>
  <script src="../assets/dist-2/js/theme.js"></script>
</body>
</html>