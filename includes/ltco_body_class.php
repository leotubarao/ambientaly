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

  if ( is_singular('products') ) {
    $terms = ['line-products', 'segment-products'];

    $line_term = get_the_terms( get_the_ID($post), $terms[0] );
    $segment_term = get_the_terms( get_the_ID($post), $terms[1] );

    $termsParent = get_term_by( 'id', $line_term[0]->parent, $terms[0] );

    $cond = $termsParent->slug;

    $classTerms = 'blue';

    if ($segment_term[0]->slug === 'industrial' && $cond === 'aguas') $classTerms = 'orange';

    if ($cond === 'agro') $classTerms = 'green';

    if ($cond === 'mineracao') $classTerms = 'brown';

    array_push( $classes, replacePostName("term_$classTerms") );
  }

  return $classes;
}

add_filter( 'body_class', 'ltco_body_class_terms' );

