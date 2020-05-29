<?php
include '../koneksi.php';
$id = $_GET['id'];
$id_user = $_COOKIE['version'];

$query = "SELECT * FROM tb_wisata WHERE id_wisata = '$id'";
$exe = mysqli_query($conn, $query);
$row = mysqli_fetch_array($exe);

$query3 = "SELECT * FROM tb_user WHERE id_user = '$id_user'";
$exe3 = mysqli_query($conn, $query3);
$row3 = mysqli_fetch_array($exe3);
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
                        <a href="layanan">Layanan</a>
                        <a href="detail-layanan?id=<?php echo $row['id_wisata'];?>">Detail Layanan</a>
                    </div>
                    <h2>Detail Layanan</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio_details_area p_120">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left_img">
                            <img class="img-fluid" src="../assets/images/gunung/<?php echo $row['gambar'];?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio_right_text">
                            <h4><?php echo $row['nama_wisata'];?></h4>
                            <p><?php echo $row['ket_singkat'];?></p>
                            <ul class="list">
                                <li><span>Alamat</span>:  <?php echo $row['alamat'];?></li>
                                <li><span>Harga</span>:  <?php echo number_format($row['harga']);?></li>
                                <li><span>Stok</span>:  <?php echo $row['stok'];?></li>
                                <li><span>Cara Pesan</span>: 
                                    <p>1. Jika ingin memesan harap untuk login terlebih dahulu dan pilih wisata yang ingin dituju.<br>
                                        2. Setelah memilih wisata yang dituju maka Anda akan diarahkan ke halaman lain untuk mengisi formulir dan harap isi formulir dengan benar.<br>
                                        3. Terakhir Anda akan mendapatkan kode OTP dan masukkan sesuai kode tersebut. Lalu cetak bukti.<br>
                                        pembayaran dan bayar melalui Indomaret.
                                    </p>
                                </li>
                            </ul>
                            <a class="genric-btn info circle" href="booking-wisata?id=<?php echo $row['id_wisata'];?>">Pesan</a>
                        </div>
                    </div>
                </div>
                <p><?php echo $row['ket_lengkap'];?></p>
            </div>
        </div>
    </section>

    <section class="text_members_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Testimoni</h2>
                <p>Dibawah ini merupakan beberapa testimoni pelanggan kami yang sudah pernah memesan wisata <?php echo $row['nama_wisata'];?> di Peonpegu.com</p>
            </div>
            <div class="member_slider owl-carousel">
                <?php
                $query2  = mysqli_query($conn, "SELECT t.isi, t.pekerjaan, u.nama_lengkap FROM tb_testimoni t INNER JOIN tb_user u ON t.id_user = u.id_user WHERE t.id_wisata = '$id'");
                while($row2 = mysqli_fetch_array($query2)) {
                    ?>
                    <div class="item">
                        <div class="member_item">
                            <p><?php echo $row2['isi'];?></p>
                            <h4><?php echo $row2['nama_lengkap'];?></h4>
                            <h5><?php echo $row2['pekerjaan'];?></h5>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="comment-form">
                <h4>Testimoni pada <?php echo $row['nama_wisata'];?></h4>
                <form action="Proses/add-testimoni.php" method="POST">
                    <div class="form-group form-inline">
                        <div class="form-group col-lg-6 col-md-6 name">
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $row3['nama_lengkap'];?>" placeholder="Masukkan Nama Lengkap" readonly="">
                            <input type="hidden" name="id_user" id="id_user" value="<?php echo $id_user;?>">
                            <input type="hidden" name="id_wisata" id="id_wisata" value="<?php echo $id;?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 email">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan" required="" autocomplete="off">
                        </div>                    
                    </div>
                    <div class="form-group">
                        <textarea class="form-control mb-10" rows="5" id="isi" name="isi" maxlength="148" placeholder="Tuliskan isi testimoni" required=""></textarea>
                    </div>
                    <input type="submit" name="submit" id="submit" value="Kirim Testimoni" class="primary-btn submit_btn"> 
                </form>
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