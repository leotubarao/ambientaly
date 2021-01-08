</main>
<footer class="ltco_footer">
  <div class="container py-5">
    <div class="row justify-content-between mt-n5">
      <div class="d-flex col-12 col-lg-auto mt-5">
        <img src="<?= ltco_path('svgs'); ?>/logo-ambientaly-white.svg" class="img-fluid m-auto" alt="logo-ambientaly-white">
      </div>
      <div class="divisor first"></div>
      <div class="col-12 col-sm-auto col-lg-auto mt-5">
        <nav class="ltco_footer__nav">
          <h4 class="ltco_footer__heading text-white">Ambientaly</h4>
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
          <h4 class="ltco_footer__heading text-white">Unidades Ambientaly</h4>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="#" class="nav-link">
                - Ambientaly Imbaú
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                - Ambientaly Rio Negro
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                - Ambientaly Lages
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                - Ambientaly Guaíba
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
        <span>© <span class="d-none d-sm-inline">2020 <?php bloginfo('name'); ?>. </span>Todos os direitos reservados.</span>
        <a class="ml-sm-3" href="http://www.sinaispublicidade.com.br/" target="_blank" rel="external noopener noreferrer">
          Agência <strong>SINAIS</strong>
        </a>
      </div>
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
