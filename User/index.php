<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../assets/images/fav.png" type="image/png">
    <title>Peonpegu</title>
    <link rel="stylesheet" href="../assets/dist-2/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/dist-2/vendors/linericon/style.css">
    <link rel="stylesheet" href="../assets/dist-2/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/dist-2/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/dist-2/vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="../assets/dist-2/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="../assets/dist-2/vendors/animate-css/animate.css">
    <link rel="stylesheet" href="../assets/dist-2/css/style.css">
    <link rel="stylesheet" href="../assets/dist-2/css/responsive.css">
    <style type="text/css">
        .home_banner_area .banner_inner .overlay {
            background: url('../assets/images/bg.jpeg') no-repeat scroll center center;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 121%;
            bottom: 0;
            z-index: -1;
        }      
    </style>
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
                            <li class="nav-item active"><a class="nav-link" href="index">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" href="tentang">Tentang</a></li>
                            <li class="nav-item"><a class="nav-link" href="kontak">Kontak</a></li>
                            <li class="nav-item"><a class="nav-link" href="layanan">Layanan</a></li>
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

    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h3>Pemesanan<br>Pendakian Gunung</h3>
                    <h5>Tunduklah ketika mendaki dan tegaklah ketika turun</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="offer_area p_120">
        <div class="container">
            <div class="offer_title">
                <h5>Apa yang kami tawarkan untuk Anda</h5>
                <p>Layanan pemesanan tiket pendakian gunung secara online melalui <b>www.peonpegu.com</b>. Beli tiket pendakian jadi cepat, nyaman dan mudah. <b>Peonpegu</b> dikelola oleh PT Mencari Cinta Sejati.</p>
            </div>
            <div class="row offer_inner">
                <div class="col-lg-4">
                    <div class="offer_item">
                        <img class="img-fluid" src="../assets/images/offer/Cepat.jpg" alt="">
                        <div class="offer_text">
                            <h4>Pemesanan Cepat</h4>
                            <p>Dengan menggunakan Peonpegu Anda bisa memesan tiket dengan sangat cepat tanpa melalui tahap - tahap yang terbilang rumit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="offer_item">
                        <img class="img-fluid" src="../assets/images/offer/Mudah.jpg" alt="">
                        <div class="offer_text">
                            <h4>Mudah & Terpercaya</h4>
                            <p>Peonpegu juga menjamin bahwa setiap transaksi pemesanan tiket terbilang mudah serta terpercaya. Jadi jangan ragu lagi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="offer_item">
                        <img class="img-fluid" src="../assets/images/offer/Waktu.jpg" alt="">
                        <div class="offer_text">
                            <h4>Hemat Waktu & Biaya</h4>
                            <p>Dengan menggunakan Peonpegu Anda juga bisa menghemat waktu serta biaya karena harga yang kami tawarkan relativ murah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature_area p_120">
        <div class="container">	
            <div class="main_title">
                <h2>Fitur - Fitur Peonpegu</h2>
                <p>Berikut meupakan beberapa fitur Peonpegu yang bisa memuaskan keinginan Anda.</p>
            </div>
            <div class="row feature_inner">
                <div class="col-lg-3 col-sm-6">
                    <div class="feature_item">
                        <h4>Desain Unik</h4>
                        <p>Desain yang kami buat sangatlah unik dan bisa dijalankan pada Website, Android, dan lain - lain.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature_item">
                        <h4>Sistem Keamanan</h4>
                        <p>Untuk sistem keamanannya saya bisa menjamin bahwa sangat aman.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature_item">
                        <h4>Visual Sempurna</h4>
                        <p>Visual pun juga sempurna karena tampilannya yang tidak membosankan.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature_item">
                        <h4>Penggunaan Mudah</h4>
                        <p>Dan untuk penggunaannya pun sangatlah mudah. Jika tidak bisa harap komentar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home_gallery_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Daftar tempat pendakian di Indonesia.</h2>
                <p>Pada gambar dibawah hanyalah ilustrasi saja. Jika ingin memesan maka Anda harus login terlebih dahulu.</p>
            </div>
            <div class="isotope_fillter">
                <ul class="gallery_filter list">
                    <li class="active" data-filter="*"><a href="#">Semua Wisata</a></li>
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM tb_kategori");
                    while($data = mysqli_fetch_array($sql)) {
                        ?>
                        <li data-filter=".<?php echo $data['nama_kategori'];?>"><a href="#"><?php echo $data['nama_kategori'];?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="gallery_f_inner row imageGallery1">
                <?php
                $query = mysqli_query($conn, "SELECT w.nama_wisata, w.id_wisata, w.gambar, k.nama_kategori FROM tb_wisata w INNER JOIN tb_kategori k ON w.id_kategori = k.id_kategori ORDER BY w.nama_wisata ASC");
                while($row = mysqli_fetch_array($query)) { ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 <?php echo $row['nama_kategori'];?>">
                        <div class="h_gallery_item">
                            <div class="g_img_item">
                                <img class="img-fluid" src="../assets/images/gunung/<?php echo $row['gambar'];?>" alt="">
                                <a class="light" href="../assets/images/gunung/<?php echo $row['gambar'];?>"><img src="../assets/dist-2/img/gallery/icon.png" alt=""></a>
                            </div>
                            <div class="g_item_text">
                                <h4><?php echo $row['nama_wisata'];?></h4>
                                <p><?php echo $row['nama_kategori'];?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="home_contact_area">
        <div class="left_img">
            <img src="../assets/dist-2/img/left-img.jpg" alt="">
        </div>
        <div class="h_right_form">
            <div class="h_form_inner">
                <h4>Ada yang ingin bertanya?</h4>
                <form class="row home_contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="number" name="number" placeholder="Masukkan Nomor Telepon" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email" autocomplete="off">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Tulis Pesan"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" value="submit" class="btn submit_btn form-control">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="latest_blog_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Berita Terbaru</h2>
                <p>Rangkuman berita pendakian terbaru yang didapatkan dari sumber terpercaya.</p>
            </div>
            <div class="row latest_blog_inner">
                <?php
                $query2 = mysqli_query($conn, "SELECT * FROM tb_berita ORDER BY created DESC LIMIT 4");
                while($row2 = mysqli_fetch_array($query2)) { ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="l_blog_item">
                            <div class="l_blog_img">
                                <img class="img-fluid" src="../assets/images/berita/<?php echo $row2['gambar'];?>" alt="" style="max-height: 150px;">
                            </div>
                            <div class="l_blog_text">
                                <div class="date">
                                    <a href="detail-berita?id=<?php echo $row2['id_berita'];?>"><?php echo date('d F Y', strtotime($row2['created'])); ?> | Peonpegu</a>
                                </div>
                                <a href="detail-berita?id=<?php echo $row2['id_berita'];?>">
                                    <h4><?php echo $row2['judul'];?></h4>
                                </a>
                                <p><?php echo $row2['keterangan'];?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

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

    <script src="../assets/dist-2/js/jquery-3.2.1.min.js"></script>
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