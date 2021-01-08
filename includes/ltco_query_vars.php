<?php
$GLOBALS['ltco_query'] = [
  ['tax','line-products'],
  ['tax','type-products'],
  ['tax','segment-products']
];

function choiceOption($params) {
  list($term, $query, $callback) = $params;

  return ( in_array( $term, explode( ',', $_GET[ $query ] ) ) ) ? $callback : '';
}

function ltco_search_scripts() {
  wp_enqueue_script( 'ltco_filter_products', ltco_path('scripts').'/ltco_filter_products.js', array( 'jquery' ), '1.0.0', true );

  wp_localize_script( 'ltco_filter_products', 'options', array(
		'page_redirect' => home_url()
	) );
}

add_action( 'wp_enqueue_scripts', 'ltco_search_scripts');

function ltco_query_vars_filter( $vars ) {
  foreach( $GLOBALS['ltco_query'] as $params ) {
    $vars[] .= $params[1];
  }

  return $vars;
}

add_filter( 'query_vars', 'ltco_query_vars_filter' );
