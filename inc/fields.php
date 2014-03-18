<?php
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_projets-champs-additionnels',
    'title' => 'Projets - champs additionnels',
    'fields' => array (
      array (
        'key' => 'field_5319d105aecc4',
        'label' => 'Client',
        'name' => 'client',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5319d12baecc5',
        'label' => 'Date de réalisation',
        'name' => 'date_de_realisation',
        'type' => 'date_picker',
        'instructions' => 'Sélectionnez ici la date à laquelle le projet a été mis en ligne',
        'date_format' => 'yymmdd',
        'display_format' => 'dd/mm/yy',
        'first_day' => 1,
      ),
      array (
        'key' => 'field_5319d198ea6a9',
        'label' => 'URL',
        'name' => 'url',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'projet',
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
