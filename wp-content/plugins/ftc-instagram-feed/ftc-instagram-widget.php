<?php
/*
Plugin Name: FTC Instagram Feed
Description: Simple to Show Instagram photos.
Version: 1.0
Author: FTC - Team
Author URI: https://themeforest.net/user/themeftc/portfolio
Text Domain: ftc-instagram-feed
Domain Path: /languages
*/
 
/* Prevent Direct access */
if ( !defined( 'DB_NAME' ) ) {
	header( 'HTTP/1.0 403 Forbidden' );
	die;
}

define( 'FTC_INSTAGRAM_WIDGET_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'FTC_INSTAGRAM_WIDGET_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'FTC_INSTAGRAM_WIDGET_VER', '1.0' );
define( 'FTC_INSTAGRAM_BASENAME', plugin_basename( __FILE__ ) );

/* Initialize Options */
if ( !function_exists( 'ftc_instagram_options_init' ) ):
    function ftc_instagram_options_init() {
        require_once FTC_INSTAGRAM_WIDGET_DIR.'inc/helpers.php';
        require_once FTC_INSTAGRAM_WIDGET_DIR.'inc/class-instagram-options.php';
        Ftc_Instagram_Options::get_instance();
    }
endif;

add_action( 'init', 'ftc_instagram_options_init' );


/* Initialize Widget */
if ( !function_exists( 'ftc_instagram_widget_init' ) ):
    function ftc_instagram_widget_init() {
        require_once FTC_INSTAGRAM_WIDGET_DIR.'inc/class-instagram-widget.php';
        register_widget( 'Ftc_Instagrams_Widget' );
        require_once FTC_INSTAGRAM_WIDGET_DIR.'inc/template-functions.php';
    }
endif;

add_action( 'widgets_init', 'ftc_instagram_widget_init' );

/* Load text domain */
function ftc_load_instagram_widget_text_domain() {
    load_plugin_textdomain( 'ftc-instagram-feed', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

add_action( 'plugins_loaded', 'ftc_load_instagram_widget_text_domain' );
