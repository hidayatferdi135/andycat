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
                    <a href="#slider">HOME</a>
                </li>
                <li>
                    <a href="#about">ABOUT</a>
                </li>
                 <li>
                    <a href="#services">SERVICES</a>
                </li>
                 <li>
                    <a href="#menuCard">MENU</a>
                </li> 
                <li>
                    <a href="#portfolio">GALLERY</a>
                </li> 
                <li>
                    <a href="#contact">CONTACT US</a>
                </li>
            </ul> 
            <ul class="nav navbar-nav">
                <li><a class="btn btn-primary" href="<?= base_url('Auth/index') ?>"><i class="fas fa fa-user"></i> Login</a></li>
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
            <!-- <a class="btn btn-primary" href="<?= base_url('Auth/index') ?>"><i class="fas fa fa-user"></i> Login</a> -->
        </div>

    </section>
    <!-- Main Slider End -->


    <section id="about" class="about-sec section-wrapper description">
        <div class="container">
            <div class="row">
                <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text">About</span></h2>
                   
                    <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.</p>
                </div>
                <!-- Section Header End -->

                <div class="col-md-6 col-sm-6 col-xs-12 custom-sec-img wow fadeInDown">
                    <img src="<?= base_url('vendor/city-cafe/') ?>images/features.jpg" alt="Custom Image">
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 customized-text wow fadeInDown black-ed">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet voluptatibus obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum.  lobcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum. Rem ea ducimus quos quae quo.</p>
                    <div class="row"> 
                        <div class="col-md-11">
                            <strong>Bootstrap</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto, natus est ducimus saepe laborum</p>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-11">
                            <strong>Responisve Theme</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto, natus est ducimus saepe laborum Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-11">
                            <strong>HTML5/CSS3</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto, natus est ducimus saepe laborum Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section> 
  
    <section id="services" class="section-wrapper">
        <div class="container">
            <div class="row">

                <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text">Services</span></h2>
                   
                    <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.</p>
                </div>
                <!-- Section Header End -->
 
                <div class="our-services">
			 
		
		 <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s">
						<div class="service-box">
                            <div class="icon"> <h3>Party Trays</h3>
                            </div> 
                            <p>Kami juga menerima pesanan catering untu acara peta.</p>
							<img src="<?= base_url('vendor/city-cafe/') ?>images/breakfast.jpg" alt="Custom Image">
							</div> 
</div>
                        <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s">
						<div class="service-box">
                            <div class="icon"> <h3>Packed Meals</h3>
                            </div>
                            
                            <p>Kami juga menerima pesanan catering untuk keluargaa anda.</p>
							<img src="<?= base_url('vendor/city-cafe/') ?>images/lunch.jpg" alt="Custom Image">
                        </div>
</div>
                        <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s">
						<div class="service-box">
                            <div class="icon"> <h3>Special Wedding Package</h3>
                            </div>
                            
                            <p>Kami juga menerima pesanan catering untk acara pernikahan.</p>
							<img src="<?= base_url('vendor/city-cafe/') ?>images/dinner.jpg" alt="Custom Image">
                        </div>
</div>
                     
                    </div> 
                    <div class="row">
                     
                        <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".1s">
						<div class="service-box">
                            <div class="icon">
                                <i class="icon_star-half_alt"></i><h3>Buffeat</h3>
                            </div>
                            
                            <p>Kami juga menerima pesanan untuk keluarga adan</p>
                        </div>
</div>
                        <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".1s">
						<div class="service-box">
                            <div class="icon">
                                <i class="icon_music"></i><h3>Parties</h3>
                            </div>
                            
                            <p>Kami juga menerima pesanan untuk pesta</p>
                        </div>
</div>
                        <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".1s">
						<div class="service-box">
                            <div class="icon">
                                <i class="icon_cog"></i><h3>Wedding And Event Package</h3>
                            </div>
                            
                            <p>Kami juga menerima pesanan untuk acara pernikahan</p>
                        </div>
</div>
                    </div>
                </div> 

            </div>
        </div>
    </section> 

<section class="menus style3" id="menuCard">
                <div class="container"> 
                    <div class="row"> 
	
	    <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text">Menu Card</span></h2>
                   
                    <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Silahkan pilih menu yang akan anda pesan</p>
                </div>
                <!-- Section Header End -->
				
                        <div class="menus-container"> 
                                <!-- menu --> 
                                    <div class="menu row">
                                       <?php foreach ($menu as $m): ?>
                                            <div class="col-md-6 wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                                            <div class="menu-column">
                                                <div class="food">
                                                    <div class="food-desc">
                                                        <h6 class="food-name"><?= $m['nama'] ?></h6>
                                                        <div class="dots"></div>
                                                        <div class="food-price">
                                                            <span>Rp. <?= number_format($m['harga'], 0,'.','.') ?>,-</span>
                                                        </div><!-- /food-price -->
                                                    </div><!-- /food-desc -->
                                                    <div class="food-details">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <span><?= $m['nama_kat'] ?></span>
                                                            </div>
                                                            <div class="col-md-4"></div>
                                                            <div class="col-md-4">
                                                                <a href="<?= base_url('User/pesan/').$m['id_paket'] ?>" class="btn btn-primary btn-sm">Pesan</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /food-details -->
                                                </div><!-- /food -->
                                            </div><!-- /menu-column -->
                                        </div><!-- /col-md-6 -->
                                       <?php endforeach ?>
                                    </div><!-- /row -->
                                 </div><!-- /menu-carousel -->
                        </div><!-- /menus-container --> 
                </div><!-- /container -->
            </section>


    <section id="portfolio" class="bgSection portfolio-section">
        <div class="container">
            <div class="row">

                <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text">Gallery</span></h2>
                   
                    <!-- <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1"></p> -->
                </div>
                <!-- Section Header End -->

            </div>
        </div>

        <!-- Works -->
        <div class="portfolio-works wow fadeIn" data-wow-duration="2s">

            <!-- Filter Button Start -->
            <div id="portfolio-filter" class="portfolio-filter-btn-group">
                <ul>
                    <li>
                        <a href="#" class="selected" data-filter="*">ALL</a> 
						<a href="#" data-filter=".web">CHINES</a> 
						<a href="#" data-filter=".seo">CONTINENTAL</a> 
						<a href="#" data-filter=".works">ASIAN</a> 
						<a href="#" data-filter=".brands">EUROPEN</a> 
                    </li>
                </ul>
            </div>
            <!-- Filter Button End -->

            <div class="portfolio-items">

                <!-- Portfolio Items -->
                <div class="item portfolio-item web seo">

                    <img src="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio1.jpg" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio1.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Items End -->

                <!-- Portfolio Items -->
                <div class="item portfolio-item works seo">

                    <img src="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio2.jpg" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio2.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Items End -->

                <!-- Portfolio Items -->
                <div class="item portfolio-item web">

                    <img src="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio3.jpg" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio3.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Items End -->

                <!-- Portfolio Items -->
                <div class="item portfolio-item web works brands">

                    <img src="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio4.jpg" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio4.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Items -->

                <!-- Portfolio Items -->
                <div class="item portfolio-item web brands">

                   <img src="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio5.jpg" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio5.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Items End -->

                <!-- Portfolio Items -->
                <div class="item portfolio-item works seo">

                    <img src="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio6.jpg" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio6.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Items End -->

                <div class="item portfolio-item brands seo">

                    <img src="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio1.jpg" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio7.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Items End -->

                <!-- Portfolio Items -->
                <div class="item portfolio-item web seo works">

                    <img src="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio2.jpg" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="<?= base_url('vendor/city-cafe/') ?>images/img-portfolio/portfolio8.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Items End -->
 
                

            </div>
        </div>
        <!-- Works End -->


    </section>
    <!-- Portfolio Section End -->
	
	 <section id="contact" class="section-wrapper contact-section" data-stellar-background-ratio="0.5">
    <div class="parallax-overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Section Header -->
              <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text">Contact Us</span></h2>
                   
                    <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Silahkan hubungi kami. Dan kami akan segera mengkonfirmasi</p>
                </div> 
                <!-- Section Header End -->

                <div class="contact-details">
 

                    <!-- Contact Form -->
                    <div class="contact-form wow bounceInRight"> 
                
       	<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
		<form name="sentMessage" id="contactForm"  novalidate>  
		 <div class="col-md-6">
		<input type="text" class="form-control" 
		placeholder="Full Name" id="name" required
		data-validation-required-message="Please enter your name" />
		<p class="help-block"></p>
		</div> 	
		 <div class="col-md-6">
		<input type="email" class="form-control" placeholder="Email" 
		id="email" required
		data-validation-required-message="Please enter your email" />
		</div> 	
 
		<div class="col-md-12">
        <textarea rows="10" cols="100" class="form-control" 
        placeholder="Message" id="message" required
        data-validation-required-message="Please enter your message" minlength="5" 
        data-validation-minlength-message="Min 5 characters" 
        maxlength="999" style="resize:none"></textarea>
        </div>   	
		 
		<div class="col-md-8 col-md-offset-2"><br><div id="success"> </div><button type="submit" class="btn btn-primary">Submit Message</button></div> 
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
 <script src="<?= base_url('vendor/city-cafe/') ?>contact/contact_me.js"></script>
    <script src="<?= base_url('vendor/city-cafe/') ?>js/custom.js"></script>

</body>

<!-- Mirrored from webthemez.com/demo/city-cafe-restaurant-bootstrap-4-free-website-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jul 2020 06:30:54 GMT -->
</html>
