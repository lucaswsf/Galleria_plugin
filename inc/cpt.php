<?php
add_action( 'init', 'register_galleries', 10 );

function register_galleries() {
  register_post_type( "galleries", array (
    'labels' => 
    array (
      'name' => 'Galleries',
      'singular_name' => 'Galleries',
      'add_new' => 'Ajouter',
      'add_new_item' => 'Ajouter une gallerie',
      'edit_item' => 'Modifier la gallerie',
      'new_item' => 'Nouvelle image',
      'view_item' => 'Voir la gallerie',
      'search_items' => 'Chercher une image',
      'not_found' => 'Aucune image trouvée',
      'not_found_in_trash' => 'Aucune image trouvée dans la corbeille',
      'parent_item_colon' => 'Image parente:',
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
      'slug' => 'gallerie',
      'with_front' => true,
      'pages' => true,
      'feeds' => 'galleries',
    ),
    'has_archive' => 'galleries',
    'query_var' => 'gallerie',
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