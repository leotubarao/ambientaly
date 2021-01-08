<?php
function ltco_post_class( $classes, $class, $post_id ) {

  $getPost = get_post( $post_id );

  $postName = $getPost->post_name;

  $classPost = str_replace("-", "_", "ltco_$postName");

  array_push( $classes, $classPost );

  return $classes;
}

add_filter( 'post_class', 'ltco_post_class', 10, 3 );
