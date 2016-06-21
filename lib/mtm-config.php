<?php
/**
 * Config for Page Components
 *
 */

// Make page components compatible with non Roots/Sage based themes by calling header and footer
function mtm_load_wrap() {
	if ( class_exists( 'SageWrapping' ) || class_exists( 'Spring_Wrapping' ) ) {
		return false;
	}

	return true;
}
add_action( 'after_setup_theme', 'mtm_load_wrap' );


function mtm_load_wrap_header() {

	if ( mtm_load_wrap() ) {
		get_header();
		echo '<main id="main" class="site-main" role="main">';
	}
}

function mtm_load_wrap_footer() {

	if ( mtm_load_wrap() ) {
		echo '</main>';
		get_footer();
	}
}

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


