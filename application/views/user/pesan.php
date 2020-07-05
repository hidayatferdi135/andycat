  <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webthemez.com/demo/city-cafe-restaurant-bootstrap-4-free-website-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jul 2020 06:30:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
   <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Businnes, Portfolio, Corporate"> 
    <meta name="Author" content="WebThemez"> 
    <title>Andy Catering</title>
    <link rel="stylesheet" href="<?= base_url('vendor/city-cafe/') ?>css/normalize.css">
    <link rel="stylesheet" href="<?= base_url('vendor/city-cafe/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('vendor/city-cafe/') ?>css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url('vendor/city-cafe/') ?>elegant_font/style.css" />
    <!--[if lte IE 7]><script src="elegant_font/lte-ie7.js"></script><![endif]-->
    <link rel="stylesheet" href="<?= base_url('vendor/city-cafe/') ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('vendor/city-cafe/') ?>css/slider-pro.css">
    <link rel="stylesheet" href="<?= base_url('vendor/city-cafe/') ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('vendor/city-cafe/') ?>css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url('vendor/city-cafe/') ?>css/owl.transitions.css">
    <link rel="stylesheet" href="<?= base_url('vendor/city-cafe/') ?>css/animate.css">
        <link rel="stylesheet" href="<?= base_url('vendor/city-cafe/') ?>elegant_font/style.css"> 
    <link rel="stylesheet" href="<?= base_url('vendor/city-cafe/') ?>css/style.css"> 

    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <script type="text/javascript" src="js/selectivizr.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="status"></div>
    </div>
 
    <!-- Header End -->
    <header>
        <!-- Navigation Menu start-->
        
    <nav id="topNav" class="navbar navbar-default main-menu">
    <div class="container">
        <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            ☰
        </button> 
        <?php foreach ($syarat as $s): ?>
             <a class="navbar-brand page-scroll" href="#slider"><img class="logo" style="width: 179px; height: 53;" id="logo" src="<?= base_url('assets/').$s['logo'] ?>" alt="logo"></a>
        <?php endforeach ?>
        <div class="collapse navbar-toggleable-sm" id="collapsingNavbar">
            <ul class="nav navbar-nav">
                 <li class="active">
                            <a href="<?= base_url('user/index') ?>#slider">HOME</a>
                        </li>
                        <li>
                            <a href="<?= base_url('user/index') ?>#about">ABOUT</a>
                        </li>
                         <li>
                            <a href="<?= base_url('user/index') ?>#services">SERVICES</a>
                        </li>
                         <li>
                            <a href="<?= base_url('user/index') ?>#menuCard">MENU</a>
                        </li> 
                        <li>
                            <a href="<?= base_url('user/index') ?>#portfolio">GALLERY</a>
                        </li> 
                        <li>
                            <a href="<?= base_url('user/index') ?>#contact">CONTACT US</a>
                        </li>
            </ul> 
        </div>
    </div>
</nav>

        
    </header>
    <!-- Header End -->
    <section class="slider-pro slider" id="slider">
        <div class="sp-slides">

            <!-- Slides -->
            <div class="sp-slide main-slides">
                <div class="img-overlay"></div>

                <img class="sp-image" src="<?= base_url('vendor/city-cafe/') ?>images/slider/slider-img-1.jpg" alt="Slider 1"/>

                <h1 class="sp-layer slider-text-big"
                data-position="center" data-show-transition="left" data-hide-transition="right" data-show-delay="1500" data-hide-delay="200">
                <span class="highlight-texts">The Best Healthy Food</span>
                </h1>

                <p class="sp-layer"
                data-position="center" data-vertical="15%" data-show-delay="2000" data-hide-delay="200" data-show-transition="left" data-hide-transition="right">
                    Makanan yang baik dan sehat untuk dimakan
                </p>
            </div>
            <!-- Slides End -->

            <!-- Slides -->
            <div class="sp-slide main-slides">
            <div class="img-overlay"></div>
                <img class="sp-image" src="<?= base_url('vendor/city-cafe/') ?>images/slider/slider-img-2.jpg" alt="Slider 2"/>

                <h1 class="sp-layer slider-text-big"
                data-position="center" data-show-transition="left" data-hide-transition="right" data-show-delay="1500" data-hide-delay="200">
                <span class="highlight-texts">Delicious Food</span>
                </h1>

                <p class="sp-layer"
                data-position="center" data-vertical="15%" data-show-delay="2000" data-hide-delay="200" data-show-transition="left" data-hide-transition="right">
                    Makanan dengan rasa yang enak
                </p>
            </div>
            <!-- Slides End -->

            <!-- Slides -->
            <div class="sp-slide main-slides">
                <div class="img-overlay"></div>

                <img class="sp-image" src="<?= base_url('vendor/city-cafe/') ?>images/slider/slider-img-3.jpg" alt="Slider 3"/>

                <h1 class="sp-layer slider-text-big"
                data-position="center" data-show-transition="left" data-hide-transition="right" data-show-delay="1500" data-hide-delay="200">
                <span class="highlight-texts">The Best Testing Experience</span>
                </h1>

                <p class="sp-layer"
                data-position="center" data-vertical="15%" data-show-delay="2000" data-hide-delay="200" data-show-transition="left" data-hide-transition="right">
                    Sudah diuji Dengan Baik
                </p>
            </div>
            <!-- Slides End -->

        </div>
    </section>
    <!-- Main Slider End -->
    
     <section id="pesan" class="section-wrapper contact-section" data-stellar-background-ratio="0.5">
    <div class="parallax-overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Section Header -->
              <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text">Order Page</span></h2>
                   
                    <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">silahkan isi data di bawah ini dengan lengkap</p>
                </div> 
                <!-- Section Header End -->

                <div class="contact-details">
 

                    <!-- Contact Form -->
                    <div class="contact-form wow bounceInRight"> 
                
        <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
        <form action="<?= base_url('User/order') ?>" method="post">
          <div class="row">
            <input type="hidden" name="kode_order" value="AC-<?php   
                          function random($panjang_karakter)   
                          {   
                          $karakter = '1234567890';   
                          $string = '';   
                          for($i = 0; $i < $panjang_karakter; $i++) {   
                           $pos = rand(0, strlen($karakter)-1);   
                           $string .= $karakter{$pos};   
                          }   
                          return $string;   
                          }   
                         echo random(4);   
                         ?>">
              <input type="hidden" name="user_id" value="<?= $user['id_user'] ?>">
              <div class="col-md-4">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama">
                  </div>
              </div>
              <div class="col-md-4">
                   <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" class="form-control" name="tlp">
                  </div>
              </div>
          </div>
          
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <label>Tanggal Pengambilan</label>
                    <input type="date" class="form-control" name="tgl_peng">
                  </div>
              </div>
              <?php foreach ($paket as $p): ?>
                <input type="hidden" name="id_paket" value="<?= $p->id_paket ?>">
                  <div class="col-md-4">
                    <div class="form-group">
                        <label>Nama Menu</label>
                        <input type="text" readonly="" value="<?= $p->nama ?>" class="form-control">
                    </div>                  
                  </div>
                  <input type="hidden" name="orderan" value="<?= $p->id_paket ?>">
                  <div class="col-md-4">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" readonly="" value="<?= $p->harga ?>" class="form-control" name="harga">
                      </div>
                  </div>
              <?php endforeach ?>
          </div>

          <div class="row">
              <div class="col-md-10">
                <input type="submit" class="btn btn-primary" value="Pesan">
                  <!-- <button type="submit" >Submit</button> -->
              </div>
              <div class="col-md-2">
                  <a href="<?= base_url('user/selesai/').$user['id_user'] ?>" class="btn btn-success btn-lg" style="border-radius: 0px; font-size: 13pt;">Lihat Pesanan</a>
              </div>
          </div>
        </form>
      </div>
 
            </div>
        </div>
    </section>
        <!-- Contact Section End -->
    <section class="footer-container">
        <div class="container">
            <div class="row footer-containertent">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/') ?>logo.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et porro quos iste ratione doloribus asperiores, error omnis delectus rerum sapiente. Et, aliquam modi beatae quae in perferendis ab est fugiat!</p>
                </div>
                <div class="col-md-4">
                    <h4>News & Updates</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.</p>
                </div>
                <div class="col-md-4 contac-us">
                    <h4>Contact Us</h4>
                    <p>Lorem ipsum dolor sit amet adipisicing elit.</p>
                    <ul>
                            <li><i class="fa fa-home"></i>123 New Venu Street</li>
                            <li><i class="fa fa-phone"></i>001 123 12345 99</li>
                            <li><i class="fa fa-envelope-o"></i>support@website.com</li>
                        </ul> 
                </div>
            </div>
        </div>
    </section>
<footer>

        <div class="container">
            <div class="row">
                <div class="footer-containertent">

                    <ul class="footer-social-info">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                    </ul>
                    <br/><br/>
<p>Copyright © 2018. <a href="http://kreatindo.com/">Kreatindo</a>, All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="<?= base_url('vendor/city-cafe/') ?>js/jquery-1.11.3.min.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/modernizr.min.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/jquery.easypiechart.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/jquery.fitvids.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/jquery.stellar.min.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/wow.min.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/jquery.nav.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/smooth-scroll.min.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/jquery.sliderPro.min.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/owl.carousel.min.js"></script>
 <script src="<?= base_url('vendor/city-cafe/') ?>contact/jqBootstrapValidation.js"></script>
 <!-- <script src="<?= base_url('vendor/city-cafe/') ?>contact/contact_me.js"></script> -->
    <script src="<?= base_url('vendor/city-cafe/') ?>js/custom.js"></script>

</body>

<!-- Mirrored from webthemez.com/demo/city-cafe-restaurant-bootstrap-4-free-website-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jul 2020 06:30:54 GMT -->
</html>
