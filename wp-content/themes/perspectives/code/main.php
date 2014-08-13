<?php
/* -------------------------------------------
  EDGE Press v1.0
  - Cleaner code for Wordpress Theme
  - Requirement: Wordpress 3.8 and PHP 5.3
------------------------------------------- */
include "inflector.php";
include "cpt.php";
include "query.php";

function home() { echo home_url()."/"; }
function root() { return get_template_directory_uri()."/"; }
  function img()   { echo root()."assets/img/"; }
  function css()   { echo root()."assets/css/"; }
  function js()    { echo root()."assets/js/";  }
  function files() { echo root()."assets/files/"; }


/*
  CUSTOM NAV MENU
*/

function edge_nav_menu() {
  wp_nav_menu();
}

/* REMOVE MENU ITEMS */
add_action("admin_menu", "remove_menu_items");

/* AUTO ADD HEADER and FOOTER */
add_filter("template_include", function($template) {
  get_header();
  include $template;
  get_footer();
  return FALSE;
});