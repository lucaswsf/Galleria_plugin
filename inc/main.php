<?php
class galleria_main {
  function __construct() {
    add_action('init', array( $this, 'image_sizes' ), 40 );
    add_action( 'init', array( $this, 'enqueue' ), 30 );
  }

  function image_sizes() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'slider_thumb', '100', '100', true ); 
  }

  function enqueue() {
    wp_enqueue_script( 
      'galleria', 
      GALLERIA_URL . 'lib/galleria/galleria-1.3.5.min.js' , 
      array( 'jquery' ), 
      '1.0.0', 
      true
    );

    wp_enqueue_script( 
      'galleria.classic', 
      GALLERIA_URL . 'lib/galleria/theme/classic/galleria.classic.min.js' , 
      array( 'jquery','galleria' ), 
      '1.0.0', 
      true
    );

    wp_enqueue_script( 
      'galleria-main', 
      GALLERIA_URL . 'js/galleria-main.js' , 
      array( 'jquery','galleria','galleria.classic' ), 
      '1.0.0', 
      true
    );

    wp_enqueue_style(
      'galleria',
       GALLERIA_URL . 'lib/galleria/theme/classic/galleria.classic.css',
       false,
       '1.0.0',
       'all'
    );
  }
}


    
