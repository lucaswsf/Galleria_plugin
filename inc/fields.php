<?php
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_galleria-io',
    'title' => 'Galleria.io',
    'fields' => array (
      array (
        'key' => 'field_5328559b7e3a7',
        'label' => 'Galleria',
        'name' => 'galleria',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_532855a47e3a8',
            'label' => 'Titre',
            'name' => 'titre',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_532855ad7e3a9',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'column_width' => '',
            'save_format' => 'object',
            'preview_size' => 'thumbnail',
            'library' => 'all',
          ),
          array (
            'key' => 'field_532855c17e3aa',
            'label' => 'Lien',
            'name' => 'lien',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_532855ce7e3ab',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'formatting' => 'br',
          ),
        ),
        'row_min' => 0,
        'row_limit' => '',
        'layout' => 'table',
        'button_label' => 'Add Row',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'galleries',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}
