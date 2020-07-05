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
        </div>
    </div>
</nav>

        
    </header>
    <!-- Header End -->