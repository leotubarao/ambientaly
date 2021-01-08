<?php if ( has_post_thumbnail() ) $ltco_has_thumb = 'ltco_has_thumb'; ?>
<?php if ( is_page() ) $ltco_is_page = 'class="sr-only"'; ?>

<header class="ltco_header default <?= $ltco_has_thumb ?>" <?= ltco_thumbnail_post(); ?>>
  <div class="container ltco_title_header">
    <h1 <?= $ltco_is_page ?>><?= ltco_title(); ?></h1>
  </div>
</header>
