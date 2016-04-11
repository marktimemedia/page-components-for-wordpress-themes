<?php
/*
	Plugin Name: Page Components for ACF
	Description: Reusable page building components for layouts or single scroll sites
	Author: Marktime Media
	Version: 1.0
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


if ( ! function_exists( 'mtm_template_sidebars' ) ) {

    // Register News Page Sidebar
    function mtm_template_sidebars() {

        register_sidebar( array(
            'name'          => __( 'News Page', 'mtm' ),
            'id'            => 'news-page-sidebar',
            'class'         => 'mtm-home-sidebar',
            'before_title'  => '<h3 class="mtm-home-sidebar--title widget-title">',
            'after_title'   => '</h3>',
            'before_widget' => '<div class="mtm-home-sidebar--widget widget">',
            'after_widget'  => '</div>',
            ) 
        );

        register_sidebar( array(
            'name'          => __( 'Modular Page', 'mtm' ),
            'id'            => 'modular-page-sidebar',
            'class'         => 'mtm-modular-sidebar',
            'before_title'  => '<h3 class="mtm-modular-sidebar--title widget-title">',
            'after_title'   => '</h3>',
            'before_widget' => '<div class="mtm-modular-sidebar--widget widget ' . slbd_count_widgets( "modular-page-sidebar" ) . '">',
            'after_widget'  => '</div>',
            ) 
        );

    }

    add_action( 'widgets_init', 'mtm_template_sidebars' );

}




add_action( 'plugins_loaded', array( 'Mtm_Component_Templates', 'get_instance' ) );
?>
