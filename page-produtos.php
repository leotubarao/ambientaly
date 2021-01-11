<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>>
  <div class="container py-5">
    <?= do_shortcode('[ltco_products]') ?>
  </div>
</article>
<?php endwhile; ?>
<?php get_template_part( 'components/management' ); ?>
<?php get_footer(); ?>
