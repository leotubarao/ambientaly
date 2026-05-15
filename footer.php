</main>
<footer class="ltco_footer">
  <div class="container py-5">
    <div class="row justify-content-between mt-n5">
      <div class="d-flex col-12 col-lg-auto mt-5">
        <img src="<?= ltco_path('svgs'); ?>/logo-ambientaly-white.svg" width="200" class="img-fluid m-auto" alt="logo-ambientaly-white">
      </div>
      <div class="divisor first"></div>
      <div class="col-12 col-sm-auto col-lg-auto mt-5">
        <nav class="ltco_footer__nav">
          <h4 class="ltco_footer__heading text-white">AMBIENTALY</h4>
          <?php
            wp_nav_menu(
              array(
                'theme_location'  => 'footer-primary-nav',
                'depth'           => 0,
                'container'       => '',
                'menu_class'      => 'nav flex-column',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker()
              )
            );
          ?>
        </nav>
      </div>
      <div class="divisor"></div>
      <div class="col-12 col-sm-auto col-lg-auto mt-5">
        <nav class="ltco_footer__nav">
          <h4 class="ltco_footer__heading text-white">Unidades AMBIENTALY</h4>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="#" class="nav-link">
                - AMBIENTALY Imbaú
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                - AMBIENTALY Rio Negro
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                - AMBIENTALY Lages
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                - AMBIENTALY Guaíba
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="divisor last"></div>
      <div class="col-12 col-md-auto col-lg-auto mt-5">
        <div class="ltco_footer__social">
          <h4 class="ltco_footer__heading text-white">Rede Sociais</h4>
          <?= ltco_social_nav(['local'=>'footer']); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="ltco_footer__copyright">
    <div class="container">
      <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-between">
        <span>© <span class="d-none d-sm-inline">2026 <?php bloginfo('name'); ?>. </span>Todos os direitos reservados.</span>
        <a class="ml-sm-3" href="https://sinais.ag/" target="_blank" rel="external noopener noreferrer">
          <strong>SINAIS.ag</strong>
        </a>
      </div>
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
