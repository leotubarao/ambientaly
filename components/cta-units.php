<?php
  $translate = $GLOBALS['ltco_translate']['cta-units'];

  $title = $translate['title'];
  $description = $translate['description'];
  $button = $translate['button'];
?>

<div class="ltco_cta_units">
  <div class="ltco_cta_units__container px-3 ltco-py-2 ltco-py-lg-4">
    <div class="ltco_cta_units__wrapper">
      <p class="h3 text-white"><?= ltco_translate($title); ?></p>
      <p class="text-white"><?= ltco_translate($description); ?></p>
      <a href="<?= esc_url( home_url( 'unidades' ) ); ?>" class="ltco_destak white stretched-link">
        <?= ltco_translate($button); ?>
      </a>
    </div>
  </div>
</div>
