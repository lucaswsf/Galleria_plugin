<?php
add_action( 'init', 'register_projets', 10 );

function register_projets() {
  register_post_type( "projet", array (
    'labels' => 
    array (
      'name' => 'Projets',
      'singular_name' => 'Projet',
      'add_new' => 'Ajouter',
      'add_new_item' => 'Ajouter un projet',
      'edit_item' => 'Modifier le projet',
      'new_item' => 'Nouvelle entrée',
      'view_item' => 'Voir le projet',
      'search_items' => 'Chercher une entrée',
      'not_found' => 'Aucune entrée trouvée',
      'not_found_in_trash' => 'Aucune entrée trouvée dans la corbeille',
      'parent_item_colon' => 'Entrée parente:',
    ),
    'description' => '',
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'map_meta_cap' => true,
    'capability_type' => 'post',
    'public' => true,
    'hierarchical' => false,
    'rewrite' => 
    array (
      'slug' => 'projet',
      'with_front' => true,
      'pages' => true,
      'feeds' => 'projets',
    ),
    'has_archive' => 'projets',
    'query_var' => 'projet',
    'supports' => 
    array (
      0 => 'title',
      1 => 'editor',
      2 => 'thumbnail',
    ),
    'taxonomies' => 
    array (
    ),
    'show_ui' => true,
    'menu_position' => 30,
    'menu_icon' => false,
    'can_export' => true,
    'show_in_nav_menus' => true,
    'show_in_menu' => true,
  ) );
}