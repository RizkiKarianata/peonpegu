<?php
include '../koneksi.php';
include 'Proses/function-time.php';
$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM tb_berita WHERE id_berita = '$id'");
$row = mysqli_fetch_array($query);

$query2 = mysqli_query($conn, "SELECT COUNT(id_komentar) AS komentar FROM tb_komentar WHERE id_berita = '$id'");
$row2 = mysqli_fetch_array($query2);
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
                            <li class="nav-item"><a class="nav-link" href="layanan">Layanan</a></li>
                            <li class="nav-item active"><a class="nav-link" href="berita">Berita</a></li>
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
                        <a href="berita">Berita</a>
                        <a href="detail-berita?id=<?php echo $id;?>">Detail Berita</a>
                    </div>
                    <h2>Detail Berita</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_area single-post-area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="../assets/images/berita/<?php echo $row['gambar'];?>" alt="">
                            </div>									
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <ul class="blog_meta list">
                                    <li><a href="#">Peonpegu<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#"><?php echo date('d F Y', strtotime($row['created']));?><i class="lnr lnr-calendar-full"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2><?php echo $row['judul'];?></h2>
                            <p class="excert">
                                <?php echo $row['keterangan'];?>
                            </p>
                            <p>
                                <?php echo $row['ket_singkat'];?>
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="quotes">
                                <?php echo $row['quotes'];?>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-25">
                                    <p>
                                        <?php echo $row['ket_lengkap'];?>
                                    </p>											
                                </div>									
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4><?php echo $row2['komentar'];?> Komentar</h4>
                        <?php
                        $query3 = mysqli_query($conn, "SELECT k.isi, k.created, k.id_berita, k.id_user, u.nama_lengkap, u.gambar FROM tb_komentar k INNER JOIN tb_user u ON k.id_user  = u.id_user WHERE k.id_berita = '$id'");
                        while($row3 = mysqli_fetch_array($query3)) {
                            ?>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="../assets/images/akun/<?php echo $row3['gambar'];?>" alt="" style="width: 75px; border-radius: 50%;">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#"><?php echo $row3['nama_lengkap'];?></a></h5>
                                            <p class="date"><?php echo date('d F Y H:i:s', strtotime($row3['created']));?></p>
                                            <p class="comment">
                                                <?php echo $row3['isi'];?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>	 
                        <?php } ?>                                            				
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form>
                            <div class="form-group form-inline">
                              <div class="form-group col-lg-6 col-md-6 name">
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 email">
                                <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                            </div>										
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                        </div>
                        <a href="#" class="primary-btn submit_btn">Post Comment</a>	
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari Berita">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                            </span>
                        </div>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget author_widget">
                        <img class="author_img rounded-circle" src="../assets/images/akun/Gambar1.jpeg" alt="" style="width: 50%;">
                        <h4>Rizki Karianata</h4>
                        <p>Web Developer</p>
                        <div class="social_icon">
                            <a href="http://bit.ly/RizkiNataFB"><i class="fa fa-facebook"></i></a>
                            <a href="http://bit.ly/RizkiGH"><i class="fa fa-github"></i></a>
                            <a href="http://bit.ly/RizkiNataIG"><i class="fa fa-instagram"></i></a>
                            <a href="http://bit.ly/RizkiKarianata"><i class="fa fa-youtube"></i></a>
                        </div>
                        <p>Peonpegu merupakan Aplikasi Pemesanan Tiket Pendakian Gunung yang memudahkan para pendaki untuk memesan tiket secara online dan tidak perlu susah payah.</p>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Berita Terbaru</h3>
                        <?php
                        $query2 = mysqli_query($conn, "SELECT * FROM tb_berita ORDER BY id_berita DESC LIMIT 4");
                        while($row2 = mysqli_fetch_array($query2)) {
                            ?>
                            <div class="media post_item">
                                <img src="../assets/images/berita/<?php echo $row2['gambar'];?>" alt="post" style="width: 40%;">
                                <div class="media-body">
                                    <a href="detail-berita?id=<?php echo $row['id_berita'];?>"><h3><?php echo $row2['judul'];?></h3></a>
                                    <p><?php echo waktu_lalu($row2['created']);?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </aside>
                    <aside class="single_sidebar_widget ads_widget">
                        <a href="#"><img class="img-fluid" src="assets/dist-2/img/blog/add.jpg" alt=""></a>
                        <div class="br"></div>
                    </aside>
                    <aside class="single-sidebar-widget newsletter_widget">
                        <h4 class="widget_title">Bantuan</h4>
                        <p>
                            Jika Anda mengalami kendala atau masalah Anda dapat menghubungi kami melalui e-mail dibawah ini.
                        </p>
                        <div class="form-group d-flex flex-row">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" value="natarizky884@gmail.com" readonly="" style="background: #FFFFFF;">
                            </div>
                            <a href="#" class="bbtns">Hubungi</a>
                        </div>  
                        <p class="text-bottom">Dapat dihubungi selama 24 jam penuh</p>  
                        <div class="br"></div>                          
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<!--================ start footer Area  =================-->	
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">About Biznance</h6>
                    <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point where images and videos are</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Navigation Links</h6>
                    <div class="row">
                        <div class="col-4">
                            <ul class="list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="list">
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>										
                    </div>							
                </div>
            </div>							
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Newsletter</h6>
                    <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>		
                    <div id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                            <div class="input-group d-flex flex-row">
                                <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>		
                            </div>									
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget instafeed">
                    <h6 class="footer_title">InstaFeed</h6>
                    <ul class="list instafeed d-flex flex-wrap">
                        <li><img src="assets/dist-2/img/instagram/Image-01.jpg" alt=""></li>
                        <li><img src="assets/dist-2/img/instagram/Image-02.jpg" alt=""></li>
                        <li><img src="assets/dist-2/img/instagram/Image-03.jpg" alt=""></li>
                        <li><img src="assets/dist-2/img/instagram/Image-04.jpg" alt=""></li>
                        <li><img src="assets/dist-2/img/instagram/Image-05.jpg" alt=""></li>
                        <li><img src="assets/dist-2/img/instagram/Image-06.jpg" alt=""></li>
                        <li><img src="assets/dist-2/img/instagram/Image-07.jpg" alt=""></li>
                        <li><img src="assets/dist-2/img/instagram/Image-08.jpg" alt=""></li>
                    </ul>
                </div>
            </div>						
        </div>
        <div class="border_line"></div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                <div class="col-lg-4 col-md-4 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/dist-2/js/jquery-3.2.1.min.js"></script>
    <script src="assets/dist-2/js/popper.js"></script>
    <script src="assets/dist-2/js/bootstrap.min.js"></script>
    <script src="assets/dist-2/js/stellar.js"></script>
    <script src="assets/dist-2/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="assets/dist-2/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="assets/dist-2/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="assets/dist-2/vendors/isotope/isotope-min.js"></script>
    <script src="assets/dist-2/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/dist-2/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/dist-2/js/mail-script.js"></script>
    <script src="assets/dist-2/vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/dist-2/vendors/counter-up/jquery.counterup.js"></script>
    <script src="assets/dist-2/js/theme.js"></script>
</body>
</html>