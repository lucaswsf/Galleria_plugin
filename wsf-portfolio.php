<?php
/*
Plugin Name: WSF - Portfolio
Plugin URI: http://wsf.fr
Description: Plugin perso 
Author: Webschool
Version: 1.0
Author URI: http:moi.com
*/

// Plugin Constants
define( 'WSF_PORTFOLIO_URL', plugin_dir_url(__FILE__) );
define( 'WSF_PORTFOLIO_DIR', plugin_dir_path( __FILE__ ));

// Classes
require_once( WSF_PORTFOLIO_DIR . '/inc/cpt.php');
require_once( WSF_PORTFOLIO_DIR . '/inc/fields.php');
require_once( WSF_PORTFOLIO_DIR . '/inc/shortcodes.php');

new wsf_shortcode();