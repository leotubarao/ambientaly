<div class="ltco_management py-5">
  <div class="container">
    <figure class="ltco_management__circles mb-0">
      <img src="<?= ltco_path( 'svgs' ); ?>/people-management-circles.svg" alt="people-management-circles">
    </figure>
    <article class="ltco_management__content">
      <h2 class="ltco_management__content__heading">Gestão de Pessoas</h2>
      <p>A <strong>Ambientaly</strong> atua com total transparência e respeito com os profissionais da empresa, pois a sua valorização é o que constrói um bom ambiente de trabalho para todos.</p>

      <p>A <strong>Ambientaly</strong> utiliza o SEC – Sistema de Educação Corporativa, um conjunto de oportunidades para desenvolvimento dos colaboradores que é contínuo, crescente e cumulativo e abrange os Níveis de Formação Institucional, Treinamento Funcional e Desenvolvimento em Gestão.</p>
      <?php
        $arrManagement = ['ltco_work_with_us', 'options'];
        if (get_field(...$arrManagement)) :
      ?>
      <a href="<?= ltco_the_field($arrManagement); ?>" class="btn btn-primary ltco_btn_arrow white btn-large" target="_blank">Trabalhe conosco</a>
      <?php endif; ?>
    </article>
  </div>
</div>
