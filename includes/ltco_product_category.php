<?php

function ltco_theme_taxonomy() {
  global $post;
  $terms = ['line-products', 'segment-products'];

  $line_term = get_the_terms( get_the_ID($post), $terms[0] );
  $segment_term = get_the_terms( get_the_ID($post), $terms[1] );

  $termsParent = get_term_by( 'id', $line_term[0]->parent, $terms[0] );

  $cond = $termsParent->slug;

  if ($segment_term[0]->slug === 'industrial' && $cond === 'aguas') return 'orange';

  if ($segment_term[0]->slug === 'saneamento' && $cond === 'aguas') return 'blue';

  if ($cond === 'agro') return 'green';

  if ($cond === 'mineracao') return 'brown';

  return 'gray';
}
