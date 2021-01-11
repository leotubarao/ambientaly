<div class="ltco_products__item <?= ltco_theme_taxonomy(); ?>">
  <figure>
    <?= ( get_the_post_thumbnail() ) ?: "<img class='ltco_error' src='".ltco_path('svgs')."/logo-ambientaly.svg' alt='logo-ambientaly'>"; ?>
  </figure>
  <div class="wrapper_button">
    <a href="<?= get_permalink(); ?>" class="ltco_see_more stretched-link">
      Ver mais
    </a>
  </div>
</div>
