<?php

function ltco_theme_taxonomy() {
  global $post;

  $term = get_the_terms( get_the_ID($post), 'segment-products' );

  if ($term[0]->slug === 'industrial') return 'green';

  if ($term[0]->slug === 'saneamento') return 'blue';

  return false;
}
