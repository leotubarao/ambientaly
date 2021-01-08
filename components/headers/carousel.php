<?php
  function current_carousel($curr) {
    return ($curr===0) ? 'active' : '';
  }

  $name_field_carousel = 'ltco_carousel';
  $field_params = array( $name_field_carousel, 'option' );
  $get_carousel_item = get_field( ...$field_params );
  $counter_carousel_item = (is_array($get_carousel_item) ? count( $get_carousel_item ) : 0);

  if ( have_rows( ...$field_params ) ) :
?>

<header class="header ltco_carousel">
  <div id="carouselHeader" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">

      <?php
      $counter_loop_item = 0;
      while ( have_rows( ...$field_params ) ) : the_row();

      $image_featured = get_sub_field( $name_field_carousel.'__image_featured' );
      $image_mobile = get_sub_field( $name_field_carousel.'__image_mobile' );
    ?>

      <div class="carousel-item ltco_carousel__item <?= current_carousel($counter_loop_item); ?>" style="background-image:
      url(<?= $image_featured['url']; ?>)">

      <?= ltco_carousel_image_link( $name_field_carousel ); ?>

      <?php
        /* if ( $image_mobile ) {

          echo '<img src="'.$image_mobile['url'].'" class="ltco_carousel__item__image img-fluid d-lg-none" alt="'.$image_mobile['alt'].'"/>';

        } */

        if ( !empty( get_sub_field( $name_field_carousel.'__has_content' ) ) ) :

          while ( have_rows( $name_field_carousel.'__content' ) ) : the_row();
      ?>

      <div class="carousel-caption">
        <p class="h1 text-white">
          <?= get_sub_field( $name_field_carousel.'__content__title' ); ?>
        </p>

        <?php if ( get_sub_field( $name_field_carousel.'__content__description' ) ) : ?>
        <p class="content">
          <?= get_sub_field( $name_field_carousel.'__content__description' ); ?>
        </p>
        <?php endif; ?>

        <?= ltco_carousel_button_link( $name_field_carousel ); ?>

      </div>

      <?php endwhile; endif; ?>

    </div>

    <?php $counter_loop_item++; endwhile; ?>

  </div>

  <ol class="carousel-indicators">
    <?php
      $counter_loop_item = 0;
      while ( $counter_loop_item < $counter_carousel_item ) :
    ?>
      <li
        data-target="#carouselHeader"
        data-slide-to="<?= $counter_loop_item; ?>"
        class="<?= current_carousel($counter_loop_item); ?>"
      ></li>
    <?php $counter_loop_item++; endwhile; ?>
  </ol>

  <?php if ( $counter_carousel_item > 1 ) : ?>

  <a class="carousel-control-prev" href="#carouselHeader" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>

  <a class="carousel-control-next" href="#carouselHeader" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>

  <?php endif; ?>

  </div>
</header>

<?php endif; ?>
