<?php
/*
	Plugin Name: ACF Page Components
	Description: Reusable page building components for layouts or single scroll sites
	Author: Marktime Media
	Version: 1.1.3
	Author URI: http://www.marktimemedia.com
 */
 
define( 'MTM_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( MTM_PLUGIN_DIR . 'lib/mtm-acf-fields.php' ); 
require_once( MTM_PLUGIN_DIR . 'lib/class-mtm-component-template.php' );
require_once( MTM_PLUGIN_DIR . 'lib/class-gamajo-template-loader.php' );
require_once( MTM_PLUGIN_DIR . 'lib/class-mtm-template-loader.php' );
require_once( MTM_PLUGIN_DIR . 'lib/class-tgm-plugin-activation.php' );
require_once( MTM_PLUGIN_DIR . 'lib/mtm-acf-check-functions.php' );
require_once( MTM_PLUGIN_DIR . 'lib/mtm-acf-plugin-templates.php' );
require_once( MTM_PLUGIN_DIR . 'lib/mtm-acf-plugin-requirements.php' );
require_once( MTM_PLUGIN_DIR . 'lib/mtm-config.php' );
require_once( MTM_PLUGIN_DIR . 'lib/mtm-helpers.php' );



function mtm_page_components_load_scripts() {
    wp_enqueue_style( 'mtm-style', plugins_url( 'mtm-style.css', __FILE__) );
    wp_enqueue_script( 'mtm-tabs', plugins_url( 'assets/js/mtm-tabs.js', __FILE__), array( 'jquery' ) );
    wp_enqueue_script( 'smooth-scroll-mtm', plugins_url( 'assets/js/smooth-scroll-mtm.js', __FILE__), array( 'jquery' ), false, true );
}

add_action( 'wp_enqueue_scripts', 'mtm_page_components_load_scripts' );



add_action( 'plugins_loaded', array( 'Mtm_Component_Templates', 'get_instance' ) );
?>
