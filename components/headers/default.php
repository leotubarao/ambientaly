<?php if ( has_post_thumbnail() ) $ltco_has_thumb = 'ltco_has_thumb'; ?>

<header class="ltco_header default <?= $ltco_has_thumb ?>" <?= ltco_thumbnail_post(); ?>>
  <div class="container ltco_title_header">
    <h1 <?php if ( is_page() ) echo 'class="sr-only"'; ?>><?= ltco_title(); ?></h1>
  </div>
</header>
