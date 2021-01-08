<div class="ltco_products__item <?= ltco_theme_taxonomy(); ?>">
  <figure>
    <?= ( get_the_post_thumbnail() ) ?: "<img class='ltco_error' src='".ltco_path('svgs')."/logo-bauminas.svg' alt='logo'>"; ?>
  </figure>
  <div class="wrapper_button">
    <a href="<?= get_permalink(); ?>" class="ltco_see_more stretched-link">
      <?= ltco_translate(['Ver mais',['en' => 'See more', 'es' => 'Ver más']]); ?>
    </a>
  </div>
</div>
