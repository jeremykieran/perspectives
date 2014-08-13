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
  <nav><?php edge_nav_menu(); ?></nav>
</header>