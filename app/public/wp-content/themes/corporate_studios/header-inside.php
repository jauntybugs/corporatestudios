<!DOCTYPE html>
<html lang="en"> 
  <head>
    <title><?php wp_title('&laquo;',true,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="Corporate Studios is a photography and videography studio located in Lagos" />
    <meta name="keywords" content="Photography, Videography, Lagos, Lekki, Lagos Island, Studio, Studios, Rent, Nigeria, Equipment" />

    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/ftco-32x32.png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsiveslides.css">
    
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/aos.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.min.css">
    

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <?php wp_head(); ?>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
 <!--  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap">
      
      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-4">
				<!--<img src="img/logo.png" width="70px" alt="Corporate studios logo" />-->
              <!--<h1 class="my-0 site-logo"><a href="index.html">Corporate Studios<span class="text-primary">.</span> </a></h1>-->
            </div>
		   	<div class="col-6 col-md-4 text-center">
				<a style="display:inline-block;margin:auto" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" width="70px" alt="Corporate studios logo" /></a>
              <!--<h1 class="my-0 site-logo"><a href="index.html">Corporate Studios<span class="text-primary">.</span> </a></h1>-->
            </div>
            <div class="col-6 col-md-4">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">

                  <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black">
                    <span class="icon-menu h3"></span> <span class="menu-text">Menu</span>
                  </a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                    <li><a href="<?php echo site_url(); ?>#home-section" class="nav-link">Home</a></li>
                    <li><a href="<?php echo site_url(); ?>#what-we-do-section" class="nav-link">What We Do</a></li>
                    <li><a href="<?php echo site_url(); ?>#about-section" class="nav-link">About Us</a></li>
                    <li><a href="<?php echo site_url(); ?>#portfolio-section" class="nav-link">Portfolio</a></li>
                    <li><a href="<?php echo site_url(); ?>#studio-section" class="nav-link">Gallery</a></li>
                    <li><a href="<?php echo site_url(); ?>#contact-section" class="nav-link">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-navbar-wrap -->