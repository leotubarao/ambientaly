<?php

if ( function_exists('acf_add_options_page') ) {

  acf_add_options_page( array(
    'page_title' 	=> 'LTCO Settings',
    'menu_title'	=> 'LTCO Settings',
    'menu_slug' 	=> 'ltco-settings',
    'icon_url'		=> 'dashicons-schedule'
  ) );

  acf_add_options_sub_page( array(
    'page_title'	=> 'Carousel',
    'menu_title'	=> 'Carousel',
    'parent_slug'	=> 'ltco-settings',
  ) );

  acf_add_options_sub_page( array(
    'page_title'	=> 'Redes Sociais',
    'menu_title'	=> 'Redes Sociais',
    'parent_slug'	=> 'ltco-settings',
  ) );

  acf_add_options_sub_page( array(
    'page_title'	=> 'Outras Opções',
    'menu_title'	=> 'Outras Opções',
    'parent_slug'	=> 'ltco-settings',
  ) );

  /* acf_add_options_sub_page( array(
    'page_title'	=> 'Vídeo Institucional',
    'menu_title'	=> 'Vídeo Institucional',
    'parent_slug'	=> 'ltco-settings',
  ) ); */

  /* acf_add_options_sub_page( array(
    'page_title'	=> 'Imagens do Cabeçalho',
    'menu_title'	=> 'Imagens do Cabeçalho',
    'parent_slug'	=> 'ltco-settings',
  ) ); */
}

if ( function_exists('acf_add_local_field_group') ) {

  acf_add_local_field_group(array(
    'key' => 'group_ltco_work_with_us',
    'title' => 'Trabalhe Conosco',
    'fields' => array(
      array(
        'key' => 'field_ltco_work_with_us',
        'label' => 'Link',
        'name' => 'ltco_work_with_us',
        'type' => 'url',
        'instructions' => 'Lembrando que nos menus, não é alterado. Você deve alterá-lo nas opções dos menus.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-outras-opcoes',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

  /* acf_add_local_field_group(array(
    'key' => 'group_5d82933aa37bd',
    'title' => 'Imagens do Cabeçalho',
    'fields' => array(
      array(
        'key' => 'field_ltco_banners__search',
        'label' => 'Imagem destacada da Página de Busca',
        'name' => 'ltco_banners__search',
        'type' => 'image',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-imagens-do-cabecalho',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  )); */

  acf_add_local_field_group(array(
    'key' => 'group_5d82765583802',
    'title' => 'Redes Sociais',
    'fields' => array(
      /* array(
        'key' => 'field_5d82765ef4531',
        'label' => 'Facebook',
        'name' => 'ltco_social_facebook',
        'type' => 'url',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Ex.: https://www.facebook.com/sua-empresa',
      ), */
      array(
        'key' => 'field_5d827cf8f4533',
        'label' => 'Instagram',
        'name' => 'ltco_social_instagram',
        'type' => 'url',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Ex.: https://www.instagram.com/sua-empresa',
      ),
      /* array(
        'key' => 'field_5d827cdbf4532',
        'label' => 'YouTube',
        'name' => 'ltco_social_youtube',
        'type' => 'url',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Ex.: https://www.youtube.com/sua-empresa',
      ), */
      array(
        'key' => 'field_ltco_social_linkedin',
        'label' => 'LinkedIn',
        'name' => 'ltco_social_linkedin',
        'type' => 'url',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Ex.: https://www.linkedin.com/sua-empresa',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-redes-sociais',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'left',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

  /* acf_add_local_field_group(array(
    'key' => 'group_5d95a17504058',
    'title' => 'Opções da Página',
    'fields' => array(
      array(
        'key' => 'field_5d95a188021ab',
        'label' => 'Banner Mobile',
        'name' => 'ltco_banner_mobile',
        'type' => 'image',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'id' => '',
        ),
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  )); */

  acf_add_local_field_group(array(
    'key' => 'repeater_ltco_carousel',
    'title' => 'Carousel de Imagens',
    'fields' => array(
      array(
        'key' => 'field_5d95188cdbde5',
        'label' => 'Banner',
        'name' => 'ltco_carousel',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 0,
        'max' => 0,
        'layout' => 'row',
        'button_label' => 'Adicionar Banner',
        'sub_fields' => array(
          array(
            'key' => 'field_5d9518d9dbde6',
            'label' => 'Imagem destacada',
            'name' => 'ltco_carousel__image_featured',
            'type' => 'image',
            'instructions' => 'Altura máxima da imagem: 280px',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
          ),
          array(
            'key' => 'field_5d957d2a29d03',
            'label' => 'Imagem Mobile',
            'name' => 'ltco_carousel__image_mobile',
            'type' => 'image',
            'instructions' => 'Altura mínima da imagem: 200px',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
          ),
          array(
            'key' => 'field_ltco_carousel__has_url_image',
            'label' => 'Haverá link na imagem?',
            'name' => 'ltco_carousel__has_url_image',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
          ),
          array(
            'key' => 'field_ltco_carousel__url_image',
            'label' => 'Link na imagem',
            'name' => 'ltco_carousel__url_image',
            'type' => 'url',
            'instructions' => 'Caso seja link redirecionando a outra página do próprio site, use "%url_site%" antes no link. Ex: %url_site%/pagina-exemplo',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_ltco_carousel__has_url_image',
                  'operator' => '==',
                  'value' => '1',
                ),
              ),
            ),
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
          ),
          array(
            'key' => 'field_5d951838dbde4',
            'label' => 'Haverá conteúdo?',
            'name' => 'ltco_carousel__has_content',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
          ),
          array(
            'key' => 'field_5d951953dbde9',
            'label' => 'Conteúdo',
            'name' => 'ltco_carousel__content',
            'type' => 'group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_5d951838dbde4',
                  'operator' => '==',
                  'value' => '1',
                ),
              ),
            ),
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'field_5d9518fcdbde7',
                'label' => 'Título',
                'name' => 'ltco_carousel__content__title',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => 'br',
              ),
              array(
                'key' => 'field_5d951923dbde8',
                'label' => 'Descrição',
                'name' => 'ltco_carousel__content__description',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => 'br',
              ),
              array(
                'key' => 'field_5d9519f8dbdea',
                'label' => 'Haverá botão?',
                'name' => 'ltco_carousel__content__has_button',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '50',
                  'class' => '',
                  'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
              ),
              array(
                'key' => 'field_5d951c78dbdec',
                'label' => 'Opções do botão',
                'name' => 'ltco_carousel__content__button',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                  array(
                    array(
                      'field' => 'field_5d9519f8dbdea',
                      'operator' => '==',
                      'value' => '1',
                    ),
                  ),
                ),
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'layout' => 'block',
                'sub_fields' => array(
                  array(
                    'key' => 'field_5d951b3bdbdeb',
                    'label' => 'URL',
                    'name' => 'ltco_carousel__content__button__url',
                    'type' => 'text',
                    'instructions' => 'Caso seja link redirecionando a outra página do próprio site, use "%url_site%" antes no link. Ex: %url_site%/pagina-exemplo',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '',
                      'class' => '',
                      'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                  ),
                  array(
                    'key' => 'field_5d951cf0dbded',
                    'label' => 'Descrição',
                    'name' => 'ltco_carousel__content__button__description',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '33.333',
                      'class' => '',
                      'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-carousel',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));
}
