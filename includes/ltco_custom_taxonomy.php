<?php
function line_products_taxonomy() {
  $labels = array(
    'name'                       => 'Linhas de Produtos',
    'singular_name'              => 'Linha de Produto',
    'menu_name'                  => 'Linhas de Produtos',
    'all_items'                  => 'Todas as linhas',
    'parent_item'                => 'Linha pai',
    'parent_item_colon'          => 'Linha pai:',
    'new_item_name'              => 'Nova linha',
    'add_new_item'               => 'Adicionar nova linha',
    'edit_item'                  => 'Editar linha',
    'update_item'                => 'Atualizar linha',
    'view_item'                  => 'Ver linha',
    'separate_items_with_commas' => 'Separe as linhas com vírgulas',
    'add_or_remove_items'        => 'Adicionar ou remover linhas',
    'choose_from_most_used'      => 'Escolha entre as mais usadas',
    'popular_items'              => 'Linhas populares',
    'search_items'               => 'Pesquisar linhas',
    'not_found'                  => 'Nenhuma linha encontrada',
    'no_terms'                   => 'Nenhuma linha',
    'items_list'                 => 'Lista de linhas',
    'items_list_navigation'      => 'Navegação da lista de linhas',
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'meta_box_cb'                => false,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => false,
    'show_tagcloud'              => false,
    'rewrite'                    => false,
    'show_in_rest'               => true,
  );

  register_taxonomy( 'line-products', array( 'product' ), $args );
}

add_action( 'init', 'line_products_taxonomy', 0 );

function type_products_taxonomy() {
  $labels = array(
    'name'                       => 'Tipos de Produtos',
    'singular_name'              => 'Tipo de Produto',
    'menu_name'                  => 'Tipos de Produtos',
    'all_items'                  => 'Todos os tipos',
    'parent_item'                => 'Tipo pai',
    'parent_item_colon'          => 'Tipo pai:',
    'new_item_name'              => 'Novo tipo',
    'add_new_item'               => 'Adicionar novo tipo',
    'edit_item'                  => 'Editar tipo',
    'update_item'                => 'Atualizar tipo',
    'view_item'                  => 'Ver tipo',
    'separate_items_with_commas' => 'Separe os tipos com vírgulas',
    'add_or_remove_items'        => 'Adicionar ou remover tipos',
    'choose_from_most_used'      => 'Escolha entre as mais usadas',
    'popular_items'              => 'Tipos populares',
    'search_items'               => 'Pesquisar tipos',
    'not_found'                  => 'Nenhum tipo encontrada',
    'no_terms'                   => 'Nenhum tipo',
    'items_list'                 => 'Lista de tipos',
    'items_list_navigation'      => 'Navegação da lista de tipos',
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'meta_box_cb'                => false,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => false,
    'show_tagcloud'              => false,
    'rewrite'                    => false,
    'show_in_rest'               => true,
  );

  register_taxonomy( 'type-products', array( 'product' ), $args );
}

add_action( 'init', 'type_products_taxonomy', 0 );

function segment_products_taxonomy() {
  $labels = array(
    'name'                       => 'Segmentos',
    'singular_name'              => 'Segmento',
    'menu_name'                  => 'Segmentos',
    'all_items'                  => 'Todos os segmentos',
    'parent_item'                => 'Segmento pai',
    'parent_item_colon'          => 'Segmento pai:',
    'new_item_name'              => 'Novo segmento',
    'add_new_item'               => 'Adicionar novo segmento',
    'edit_item'                  => 'Editar segmento',
    'update_item'                => 'Atualizar segmento',
    'view_item'                  => 'Ver segmento',
    'separate_items_with_commas' => 'Separe as segmentos com vírgulas',
    'add_or_remove_items'        => 'Adicionar ou remover segmentos',
    'choose_from_most_used'      => 'Escolha entre os mais usados',
    'popular_items'              => 'Segmentos populares',
    'search_items'               => 'Pesquisar segmentos',
    'not_found'                  => 'Nenhum segmento encontrado',
    'no_terms'                   => 'Nenhum segmento',
    'items_list'                 => 'Lista de segmentos',
    'items_list_navigation'      => 'Navegação da lista de segmentos',
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'meta_box_cb'                => false,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => false,
    'show_tagcloud'              => false,
    'rewrite'                    => false,
    'show_in_rest'               => true,
  );

  register_taxonomy( 'segment-products', array( 'product' ), $args );
}

add_action( 'init', 'segment_products_taxonomy', 0 );
