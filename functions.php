<?php

require_once('includes/index.php');

function ltco_path($dirname) {
  $root = '/public';

  $dirname = ($dirname === 'svgs')
    ? "$root/images/$dirname"
    : "$root/$dirname";

  return get_template_directory_uri().$dirname;
}

function ltco_mailer( $phpmailer ) {
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.example.com';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 465;
  $phpmailer->Username = 'user@example.com';
  $phpmailer->Password = 'secret';
}

// add_action( 'phpmailer_init', 'ltco_mailer' );

function ltco_post_meta_edit($type = 'post', $margin = '') {
  edit_post_link("Editar $type","","","","badge badge-warning p-2 text-uppercase $margin");
}

/*=================================
=            Debug PHP            =
=================================*/

function debugPHP( $value ) {
  echo "<pre>";
  print_r($value);
  echo "</pre>";
}

function _ltco( $value = null ) {
  global $current_user;

  if ($current_user->user_login === 'ltco') {
    debugPHP($value);
  }
}

/*=====  End of Debug PHP  ======*/

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/*==================================
=            Shortcodes            =
==================================*/

function ltco_products() {
  ob_start();
  get_template_part('components/shortcodes/products');
  return ob_get_clean();
}
add_shortcode( 'ltco_products', 'ltco_products' );

function ltco_form() {
  ob_start();
  get_template_part('components/shortcodes/contact-form');
  return ob_get_clean();
}
add_shortcode( 'ltco_form', 'ltco_form' );

function ltco_units_contact() {
  ob_start();
  get_template_part('components/shortcodes/units-contact');
  return ob_get_clean();
}
add_shortcode( 'ltco_units_contact', 'ltco_units_contact' );

function ltco_divider_color( $atts ) {
  $atts = shortcode_atts(
    array(
      'color' => null,
      'class' => null
    ),
    $atts
  );

  $class = $atts['class'];

  if ($atts['color']) $colorClass = 'ltco_wrapper_color';

  $post_class = esc_attr( implode( ' ', get_post_class( $colorClass ) ) );

  return "</div></article><article class='$post_class'><div class='container py-5 $class'>";
}
add_shortcode( 'divider', 'ltco_divider_color' );

/*=====  End of Shortcodes  ======*/

/*=======================================
=            Themes Supports            =
=======================================*/

/*----------  Post thumbnail  ----------*/

add_theme_support( 'post-thumbnails' );

/*----------  Page Excerpt  ----------*/

add_post_type_support( 'page', 'excerpt' );

/*----------  Menu  ----------*/

add_theme_support( 'menus' );

register_nav_menus( array(
  'header-visible-nav' => 'Header Visible',
  'header-collapse-nav' => 'Header Collapse',
  'footer-primary-nav' => 'Footer Primary',
  'footer-secondary-nav' => 'Footer Secondary'
));

/*----------  Title Tag  ----------*/

add_theme_support( 'title-tag' );

/*=====  End of Themes Supports  ======*/

/*====================================
=            Theme Filter            =
====================================*/

add_filter('show_admin_bar', '__return_false');

/*=====  End of Theme Filter  ======*/

/*========================================
=            Remove WordPress            =
========================================*/

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/*=====  End of Remove WordPress  ======*/
