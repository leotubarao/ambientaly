<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>>
  <div class="container py-5">
    <?php ltco_post_meta_edit('post', 'mb-3'); ?>
    <?php the_content(); ?>
  </div>
</article>
<?php endwhile; ?>
<?php get_template_part( 'components/management' ); ?>
<?php get_footer(); ?>
