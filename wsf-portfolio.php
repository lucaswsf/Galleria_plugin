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
define( 'WSF_PORTFOLIO_URL', plugin_dir_url(__FILE__) );
define( 'WSF_PORTFOLIO_DIR', plugin_dir_path( __FILE__ ));

// Classes
require_once( WSF_PORTFOLIO_DIR . 'inc/cpt.php');
require_once( WSF_PORTFOLIO_DIR . 'inc/fields.php');
require_once( WSF_PORTFOLIO_DIR . 'inc/shortcodes.php');
require_once( WSF_PORTFOLIO_DIR . 'inc/main.php');

new galleria_shortcode();
new galleria_main();