<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class('container py-5'); ?>>
  <?php ltco_post_meta_edit('post', 'mb-3'); ?>
  <?php the_content(); ?>
</article>
<?php endwhile; ?>
<?php get_footer(); ?>
