<?php
/*
	Plugin Name: ACF Page Components
	Description: Reusable page building components for layouts or single scroll sites
	Author: Marktime Media
	Version: 1.13.1
	Author URI: http://www.marktimemedia.com
	GitHub Plugin URI: https://github.com/marktimemedia/page-components-for-wordpress-themes
 */
 
define( 'MTM_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( MTM_PLUGIN_DIR . 'lib/class-mtm-field-definitions.php' ); 
require_once( MTM_PLUGIN_DIR . 'lib/class-mtm-field-groups.php' ); 
require_once( MTM_PLUGIN_DIR . 'lib/class-mtm-field-component-definitions.php' ); 
require_once( MTM_PLUGIN_DIR . 'lib/class-mtm-field-component-groups.php' ); 
require_once( MTM_PLUGIN_DIR . 'lib/mtm-acf-fields.php' ); 
require_once( MTM_PLUGIN_DIR . 'lib/class-mtm-component-template.php' );
require_once( MTM_PLUGIN_DIR . 'lib/class-gamajo-template-loader.php' );
require_once( MTM_PLUGIN_DIR . 'lib/class-mtm-template-loader.php' );
require_once( MTM_PLUGIN_DIR . 'lib/class-tgm-plugin-activation.php' );
require_once( MTM_PLUGIN_DIR . 'lib/mtm-acf-check-functions.php' );
require_once( MTM_PLUGIN_DIR . 'lib/mtm-acf-plugin-templates.php' );
require_once( MTM_PLUGIN_DIR . 'lib/mtm-acf-plugin-requirements.php' );
require_once( MTM_PLUGIN_DIR . 'lib/mtm-helpers.php' );
require_once( MTM_PLUGIN_DIR . 'lib/mtm-config.php' );


// Plugin Scripts
function mtm_page_components_load_scripts() {
    wp_enqueue_style( 'mtm-style', plugins_url( 'mtm-style.css', __FILE__) );
    wp_enqueue_script( 'mtm-tabs', plugins_url( 'assets/js/mtm-tabs.js', __FILE__), array( 'jquery' ) );
    wp_enqueue_script( 'smooth-scroll-mtm', plugins_url( 'assets/js/smooth-scroll-mtm.js', __FILE__), array( 'jquery' ), false, true );
}

add_action( 'wp_enqueue_scripts', 'mtm_page_components_load_scripts' );

// Admin Scripts
function mtm_page_components_admin_scripts() {
    wp_enqueue_style( 'mtm-admin', plugins_url( 'assets/scss/css/mtm-admin-style.css', __FILE__) );
}

add_action( 'acf/input/admin_enqueue_scripts', 'mtm_page_components_admin_scripts' );


// Add Templates
add_action( 'plugins_loaded', array( 'Mtm_Component_Templates', 'get_instance' ) );
?>
