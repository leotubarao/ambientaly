<?php

function units_post_type() {
	$labels = array(
		'name'                  => 'Unidades',
		'singular_name'         => 'Unidade',
		'menu_name'             => 'Unidades',
		'name_admin_bar'        => 'Unidades',
		'archives'              => 'Unidade arquivada',
		'attributes'            => 'Atributos da unidade',
		'parent_item_colon'     => 'Unidade pai:',
		'all_items'             => 'Todas as unidades',
		'add_new_item'          => 'Adicionar nova unidade',
		'add_new'               => 'Adicionar unidade',
		'new_item'              => 'Nova unidade',
		'edit_item'             => 'Editar unidade',
		'update_item'           => 'Atualizar unidade',
		'view_item'             => 'Ver unidade',
		'view_items'            => 'Ver unidades',
		'search_items'          => 'Pesquisar Unidade',
		'not_found'             => 'Não encontrado',
		'not_found_in_trash'    => 'Não encontrado no lixo',
		'featured_image'        => 'Imagem destacada',
		'set_featured_image'    => 'Definir imagem destacada',
		'remove_featured_image' => 'Remover imagem destacada',
		'use_featured_image'    => 'Use como imagem destacada',
		'insert_into_item'      => 'Inserir na unidade',
		'uploaded_to_this_item' => 'Enviado para esta unidade',
		'items_list'            => 'Lista de unidades',
		'items_list_navigation' => 'Navegação da lista de unidades',
		'filter_items_list'     => 'Filtrar lista de unidades'
  );

	$rewrite = array(
		'slug'                  => 'unidade',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true
  );

	$args = array(
		'label'                 => 'Unidades',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true
  );

  register_post_type( 'units', $args );
  flush_rewrite_rules();
}

// add_action( 'init', 'units_post_type', 0 );

function product_post_type() {

  $labels = array(
    'name'                  => 'Produtos',
    'singular_name'         => 'Produto',
    'menu_name'             => 'Produtos',
    'name_admin_bar'        => 'Produtos',
    'archives'              => 'Produtos arquivados',
    'attributes'            => 'Atributos do produto',
    'parent_item_colon'     => 'Produto pai:',
    'all_items'             => 'Todos os produtos',
    'add_new_item'          => 'Adicionar novo produto',
    'add_new'               => 'Adicionar produto',
    'new_item'              => 'Novo produto',
    'edit_item'             => 'Editar produto',
    'update_item'           => 'Atualizar produto',
    'view_item'             => 'Ver produto',
    'view_items'            => 'Ver produtos',
    'search_items'          => 'Pesquisar produto',
    'not_found'             => 'Não encontrado',
    'not_found_in_trash'    => 'Não encontrado no lixo',
    'featured_image'        => 'Imagem destacada',
    'set_featured_image'    => 'Definir imagem destacada',
    'remove_featured_image' => 'Remover imagem destacada',
    'use_featured_image'    => 'Use como imagem destacada',
    'insert_into_item'      => 'Inserir no produto',
    'uploaded_to_this_item' => 'Enviado para este produto',
    'items_list'            => 'Lista de produtos',
    'items_list_navigation' => 'Navegação da lista de produtos',
    'filter_items_list'     => 'Filtrar lista de produtos',
  );

  $rewrite = array(
    'slug'                  => 'produtos/%cat_products%',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
  );

  $args = array(
    'label'                 => 'Produtos',
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 20,
    'menu_icon'             => 'dashicons-products',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'post',
    'show_in_rest'          => true
  );

  register_post_type( 'product', $args );
}

add_action( 'init', 'product_post_type', 0 );

function ltco_custom_permalinks_products($post_link, $id = 0) {
  $post = get_post($id);

  if (is_object($post)) {
    $terms = wp_get_object_terms($post->ID, 'segment-products');

    if ($terms) {
      return str_replace('%cat_products%', $terms[0]->slug, $post_link);
    }
  }

  return ('product' == get_post_type($post)) ? str_replace('%cat_products%', 'sem-categoria', $post_link) : $post_link;
}

add_filter('post_type_link', 'ltco_custom_permalinks_products', 1, 3);

function ltco_custom_permalinks_products_rewrite_rules($rules) {
  $newRules = array();

  $newRules['produtos/(.+)/(.+?)$'] = 'index.php?product=$matches[2]';

  return array_merge($newRules, $rules);
}

add_filter('rewrite_rules_array', 'ltco_custom_permalinks_products_rewrite_rules');
