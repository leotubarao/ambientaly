<?php if (is_page( 136 )) get_template_part( 'components/filter-products' ); ?>
<?php
  $taxonomyName = 'line-products';
  $current_term = get_term_by( 'slug', ltco_parent_page(), $taxonomyName );
  $termchildren = get_term_children( $current_term->term_id, $taxonomyName );

  $args = array(
    'post_type' => 'products',
    'order' => 'ASC',
    'orderby' => 'menu_order',
    'post_status' => 'publish',
    'showposts' => -1,
    'tax_query' => array(
      array(
        'taxonomy' => $taxonomyName,
        'terms' => $termchildren,
        'field' => 'id',
      ),
    ),
  );

  foreach( $GLOBALS['ltco_query'] as $params ) {

    $condQueryVar = get_query_var( $params[1] );

    if ( empty($condQueryVar) ) continue;

    $value = explode(',', $_GET[ $params[1] ]);

    if( !in_array( 'all', $value ) ) {
      $args['tax_query'][] = array(
        'taxonomy' => $params[1],
        'field' => 'slug',
        'terms' => $value
      );
    }
  }

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) :
?>
<section class="ltco_products">
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>

  <?php get_template_part( 'components/posts/product' ); ?>

  <?php endwhile; ?>
</section>
<?php endif; wp_reset_query(); ?>

