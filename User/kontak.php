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
                            <li class="nav-item active"><a class="nav-link" href="kontak">Kontak</a></li>
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

    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="index">Beranda</a>
                        <a href="kontak">Kontak</a>
                    </div>
                    <h2>Kontak Kami</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_area p_120">
        <div class="container">
            <div id="mapBox" class="mapBox" data-lat="-7.98814" data-lon="112.61295" data-zoom="13" data-mlat="-7.98814" data-mlon="112.61295"></div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Malang, Jawa Timur</h6>
                            <p>Perusahaan Peonpegu</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">+62895-3953-33224</a></h6>
                            <p>Senin - Sabtu|08.00 - 20.00</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">natarizky884@gmail.com</a></h6>
                            <p>Kirim sebuah pesan jika butuh bantuan!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Masukkan Subyek" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Isi Pesan"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn submit_btn">Kirim</button>
                        </div>
                    </form>
                </div>
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
    <script src="../assets/dist-2/js/mail-script.js"></script>
    <script src="../assets/dist-2/vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="../assets/dist-2/vendors/counter-up/jquery.counterup.js"></script>
    <script src="../assets/dist-2/js/jquery.form.js"></script>
    <script src="../assets/dist-2/js/jquery.validate.min.js"></script>
    <script src="../assets/dist-2/js/contact.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="../assets/dist-2/js/gmaps.min.js"></script>
    <script src="../assets/dist-2/js/theme.js"></script>
</body>
</html>