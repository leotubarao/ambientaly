<?php
function replacePostName($name) {
  if (empty($name)) return;
  return "ltco_body_".str_replace("-", "_", $name);
}

function ltco_body_class( $classes ) {
  global $post;

  $ancestors = get_ancestors( get_the_ID( $post ), 'page' );

  if ( is_home() || is_front_page() || is_404() || is_category() || is_search() ) return $classes;

  array_push( $classes, replacePostName( $post->post_name ) );

  if ( !empty( $ancestors ) ) {
    foreach ( $ancestors as $ancestor ) {
      $post_data	= get_post( $ancestor );
      array_push( $classes, replacePostName( $post_data->post_name ) );
    }
  }

  return $classes;
}

add_filter( 'body_class', 'ltco_body_class' );

function ltco_body_class_terms( $classes ) {
  global $post;

  if ( is_singular('product') ) {
    $term = get_the_terms( get_the_ID($post), 'segment-products' );

    $classTerms = 'blue';

    if ($term[0]->slug === 'industrial') $classTerms = 'green';

    if ($term[0]->slug === 'saneamento') $classTerms = 'blue';

    array_push( $classes, replacePostName("term_$classTerms") );
  }

  return $classes;
}

add_filter( 'body_class', 'ltco_body_class_terms' );

