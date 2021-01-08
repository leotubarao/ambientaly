<?php get_header(); ?>
<div class="ltco_home">
  <section class="ltco_triade container py-5">
    <div class="row mt-n5">
      <article class="col-12 col-md-6 col-lg-4 mt-5">
        <h2 class="ltco_triade__heading darken">Por dentro <br>da Ambientaly</h2>
        <p>Fundada em 1993, a <strong>Ambientaly</strong> atua no mercado químico oferecendo soluções customizadas de alta performance ao setor…</p>
        <hr>
        <a href="<?= home_url('empresa'); ?>" class="ltco_btn_arrow stretched-link">Saiba mais</a>
      </article>
      <article class="col-12 col-md-6 col-lg-4 mt-5">
        <h2 class="ltco_triade__heading">Compromisso <br>com o meio ambiente</h2>
        <p>Motivada por seu compromisso socioambiental, a <strong>Ambientaly</strong> atua com o objetivo de buscar desenvolvimento sustentável, econômico, social…</p>
        <hr>
        <a href="<?= home_url('sustentabilidade'); ?>" class="ltco_btn_arrow stretched-link">Saiba mais</a>
      </article>
      <article class="col-12 col-md-6 col-lg-4 mt-5">
        <h2 class="ltco_triade__heading lighten">Conheça os segmentos <br>em que atuamos</h2>
        <p>Conheça os segmentos e produtos…Ácido Clorídrico, Ácido Nítrico, Barrilha, Cal Hidratada, Coagulantes a base de sais…</p>
        <hr>
        <a href="<?= home_url('produtos'); ?>" class="ltco_btn_arrow stretched-link">Saiba mais</a>
      </article>
    </div>
  </section>
  <section class="ltco_sustentability">
    <div class="container">
      <article class="ltco_sustentability__content">
        <h2 class="ltco_sustentability__content__heading">Sustentabilidade</h2>
        <p>O compromisso da Ambientaly com o desenvolvimento responsável e sustentável é tão forte, que a empresa leva o meio ambiente até no nome. Desde a sua fundação, a <strong>Ambientaly</strong> abraçou esta causa: um trabalho de longo prazo que contribui para a construção de um futuro mais verde, mais azul, mais puro, mais humano, com mais vida.</p>
        <a href="<?= home_url('sustentabilidade'); ?>" class="ltco_btn_arrow white">Saiba mais</a>
      </article>
    </div>
  </section>
</div>
<?php get_template_part( 'components/management' ); ?>
<?php get_footer(); ?>
