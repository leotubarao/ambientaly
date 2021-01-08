<!DOCTYPE html>
<html lang="pt-br">
<?php get_head(); ?>
<body <?php body_class(); ?>>
<div id="root">
<?php
  get_template_part( 'components/navbar' );
  ( is_front_page() ) ? get_template_part( 'components/headers/carousel' ) : get_template_part( 'components/headers/default' );
?>
<main class="ltco_main">
