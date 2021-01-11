<?php
  $selects = [
    [
      'tax-name' => 'line-products',
      'label' => 'Linhas'
    ],
    [
      'tax-name' => 'type-products',
      'label' => 'Tipos'
    ]
  ];
?>
<form
  class="ltco_filter ltco-pb-1 ltco-mb-1 ltco-pb-sm-2 ltco-mb-sm-2 ltco-pb-lg-3 ltco-mb-lg-3"
  autocomplete='off'
>
  <div class="row">

    <?php
      foreach ($selects as $select) :

      if ($select['label'] === 'Tipos') $marginClass = 'mr-md-auto';

      $terms = get_terms( $select['tax-name'], $args );

      if ( !empty( $terms ) && !is_wp_error( $terms ) ) :
    ?>
    <select data-filter="<?= $select['tax-name']; ?>" name="<?= $select['tax-name']; ?>" class="custom-select <?= $marginClass; ?>">
      <option value="all" selected><?= $select['label']; ?></option>
      <?php
        foreach ( $terms as $term ) :
          $termSlug = $term->slug;
          $termName = $term->name;
          $hasOnURLSelected = choiceOption( [$termSlug, $select['tax-name'], 'selected'] );

          echo "<option value='$termSlug' $hasOnURLSelected>$termName</option>";
        endforeach;
      ?>
    </select>

    <?php
      endif;
      endforeach;
    ?>

    <?php
      $terms = get_terms( 'segment-products' );

      if ( !empty( $terms ) && !is_wp_error( $terms ) ) : foreach ( $terms as $term ) :
        $termSlug = $term->slug;
        $termName = $term->name;
    ?>
    <div class="custom-control custom-checkbox <?= ($termSlug === 'industrial') ? 'green' : ''; ?>">
      <input
        class="custom-control-input"
        type="checkbox"
        name="segment-products"
        value="<?= $termSlug; ?>"
        id="<?= $termSlug; ?>"
        <?= choiceOption( [$termSlug, 'segment-products', 'checked'] ); ?>
      >
      <label class="custom-control-label" for="<?= $termSlug; ?>"><?= $termName; ?></label>
    </div>

    <?php endforeach; endif; ?>

    <button type="submit" class="btn btn-primary">Filtrar</button>
  </div>
</form>
