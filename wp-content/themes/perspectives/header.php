<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">

  <!-- WEBSITE DETAIL -->
  <title><?php bloginfo("name"); ?> <?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <!-- FAVICON -->
  <link rel="icon" href="<?php img(); ?>/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="<?php img(); ?>/favicon-big.png">
  
  <!-- JAVASCRIPT -->
  <script src="<?php js(); ?>/vendor/custom.modernizr.js"></script>
  
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="<?php css(); ?>/framework.css">
  <link rel="stylesheet" href="<?php css(); ?>/app.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,300,700,900" type="text/css">

  <?php wp_head(); ?>
</head>
<body <?php body_class( $class ); ?>>
  
<header class="banner">
	<div class="row">
		<div class="brand"><a href="<?php echo home_url(); ?>"><h1>Perspectives Film Festival</h1></a></div>
		<nav>
      <span class="social">
        <a href="http://www.facebook.com/PerspectivesFF" alt="Facebook"><i class="icon-facebook-squared"></i></a>
        <a href="http://www.instagram.com/Perspectivesfilmfest" alt="Instagram - Perspectivesfilmfest"><i class="icon-instagram"></i></a>
      </span>
      <?php edge_nav_menu(); ?>
    </nav>
    
		<div id="hamburger" class="hamburglar is-closed menu-toggle">
	    <div class="burger-icon">
	      <div class="burger-container">
	        <span class="burger-bun-top"></span>
	        <span class="burger-filling"></span>
	        <span class="burger-bun-bot"></span>
	      </div>
	    </div>
	  </div>
	</div>
</header>