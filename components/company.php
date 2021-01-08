<?php $translate = $GLOBALS['ltco_translate']['company']['title']; ?>
<div class="ltco_company">
  <div class="container">
    <?php /*if (is_front_page()) : ?>
    <p class="ltco_company__heading h5 text-dark mb-4"><?= ltco_translate($translate); ?></p>
    <?php endif;*/ ?>
    <ul class="ltco_company__list">
    <?php
      $companies = [
        [
          'color' => 'blue',
          'href' => 'bauminas-aguas',
          'name' => 'Águas'
        ],
        [
          'color' => 'green',
          'href' => 'bauminas-agro',
          'name' => 'Agro'
        ],
        [
          'color' => 'brown',
          'href' => 'bauminas-mineracao',
          'name' => 'Mineração'
        ],
        [
          'color' => 'orange',
          'href' => 'bauminas-log',
          'name' => 'Log'
        ],
        [
          'color' => 'darkblue',
          'href' => 'hidroazul',
          'name' => 'Hidroazul'
        ]
      ];
      foreach ($companies as $company) :
        $isHidroazul = ($company['href'] === 'hidroazul');
        $href = $isHidroazul ? 'http://hidroazul.com.br/' : home_url( $company['href'] );
    ?>
      <li class="ltco_company__list__<?= $company['color']; ?>">
        <a href="<?= $href; ?>" <?= !$isHidroazul?:' target="_blank"'; ?>>
          <span><strong>BAUMINAS</strong><?= $company['name']; ?></span>
        </a>
      </li>
    <?php endforeach; ?>
    </ul>
  </div>
</div>
