<nav class="navbar navbar-light ltco_navbar_header">
  <div class="container">

    <a class="navbar-brand" href="<?= home_url(); ?>">
      <img src="<?= ltco_path('svgs'); ?>/logo-ambientaly.svg" width="180" alt="logo-ambientaly">
    </a>

    <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'header-visible-nav',
          'depth'           => 1,
          'container'       => '',
          'menu_class'      => 'nav ltco_navbar_header__navbar_visible ml-auto',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker()
        )
      );
    ?>

    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarHeader"
      aria-controls="navbarHeader"
      aria-expanded="false"
      aria-label="Alterna navegação"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <?= ltco_social_nav(['theme'=>'dark', 'local'=>'header', 'class'=>'ml-4 d-none d-sm-flex']); ?>

    <div class="ltco_navbar_header__collapse navbar-collapse collapse" id="navbarHeader">
      <div class="navbar-wrapper">

        <button
          class="navbar-toggler inside"
          type="button"
          data-toggle="collapse"
          data-target="#navbarHeader"
          aria-controls="navbarHeader"
          aria-expanded="false"
          aria-label="Alternar navegação"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <header class="ltco_navbar_header__collapse__logo pb-5 px-3 d-flex">
          <img src="<?= ltco_path('svgs'); ?>/logo-ambientaly-white.svg" class="img-fluid m-auto" width="160" alt="logo-ambientaly-white">
        </header>

        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'header-collapse-nav',
              'depth'           => 2,
              'container'       => '',
              'menu_class'      => 'navbar-nav ltco_navbar_header__collapse__navbar',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker()
            )
          );
        ?>

        <footer class="ltco_navbar_header__collapse__footer p-3 py-4">
          <?= ltco_social_nav(['theme'=>'dark', 'local'=>'header']); ?>
        </footer>

      </div>
    </div>

  </div>
</nav>
