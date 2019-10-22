<?php
/**
 * Config for Page Components
 *
 */

/**
* Make page components compatible with non Roots/Sage based themes by calling header and footer
*/
function mtm_load_wrap() {
	if ( class_exists( 'SageWrapping' ) || class_exists( 'Spring_Wrapping' ) ) {
		return false;
	}

	return true;
}
add_action( 'after_setup_theme', 'mtm_load_wrap' );

/**
* Load header on standard themes
*/
function mtm_load_wrap_header() {

	if ( mtm_load_wrap() ) {
		get_header();
		echo '<main id="main" class="site-main" role="main">';
	}
}
/**
* Load footer on standard themes
*/
function mtm_load_wrap_footer() {

	if ( mtm_load_wrap() ) {
		echo '</main>';
		get_footer();
	}
}

/**
* Add options page for this plugin to be able to enqueue our own stuff
*
*/
if( !function_exists( 'mtm_plugin_options_page' ) ) {
	add_action('acf/init', 'mtm_plugin_options_page');

	function mtm_plugin_options_page() {

	    if( function_exists('acf_add_options_sub_page') ) {

	        $option_page = acf_add_options_sub_page(array(
	            'page_title'    => __('Page & Block Display Settings', 'mtm'),
	            'menu_title'    => __('Display Settings', 'mym'),
	            'menu_slug'     => 'page-components-settings',
	            'parent_slug'   =>  'options-general.php'
	        ));

	    }
	 }
}

/**
* Register Sidebars
*/
function mtm_template_sidebar_news() {

    register_sidebar(array(
        'name'          => __('News Page', 'mtm'),
        'id'            => 'news-page-sidebar',
        'class'         => 'mtm-home-sidebar',
        'before_widget' => '<section class="mtm-home-sidebar--widget widget %1$s %2$s"><div class="widget-inner">',
        'after_widget'  => '</div></section>',
        'before_title'  => '<div class="widget--title-wrap"><h3 class="mtm-home-sidebar--title widget-title">',
        'after_title'   => '</h3></div>',
    ));

}

function mtm_template_sidebar_modular() {

    register_sidebar(array(
        'name'          => __('Modular Page', 'mtm'),
        'id'            => 'modular-page-sidebar',
        'class'         => 'mtm-modular-sidebar',
        'before_widget' => '<section class="mtm-modular-sidebar--widget widget %1$s %2$s ' . slbd_count_widgets( "modular-page-sidebar" ) . '"><div class="widget-inner">',
        'after_widget'  => '</div></section>',
        'before_title'  => '<div class="widget--title-wrap"><h3 class="mtm-modular-sidebar--title widget-title">',
        'after_title'   => '</h3></div>',
    ));

}

if( get_field( 'mtm_register_sidebars', 'option' ) ) {
    if( in_array( 'news-page', get_field( 'mtm_register_sidebars', 'option' ) ) or 'news-page' == get_field( 'mtm_register_sidebars', 'option' ) ) {
        add_action( 'widgets_init', 'mtm_template_sidebar_news' );
    }
    if( in_array( 'modular', get_field( 'mtm_register_sidebars', 'option' ) ) or 'modular' == get_field( 'mtm_register_sidebars', 'option' ) ) {
        add_action( 'widgets_init', 'mtm_template_sidebar_modular' );
    }
}
