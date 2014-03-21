<?php
/*
Plugin Name: Galleria for Wordpress
Plugin URI: http://galleria-wp.fr
Description: Galleria is a JavaScript image gallery framework that simplifies the process of creating beautiful image galleries for the web and mobile devices. 
Author: Lucas Marot, Jean-Philippe Brou, Nicolas Rabrenovic
Version: 1.1
Author URI: http:lucasmarot.fr
*/

// Plugin Constants
define( 'GALLERIA_URL', plugin_dir_url( __FILE__ ) );
define( 'GALLERIA_DIR', plugin_dir_path( __FILE__ ));

// Classes
require_once( GALLERIA_DIR . 'inc/cpt.php');
require_once( GALLERIA_DIR . 'inc/fields.php');
require_once( GALLERIA_DIR . 'inc/shortcodes.php');
require_once( GALLERIA_DIR . 'inc/main.php');

new galleria_shortcode();
new galleria_main();