<?php
/*
Template Name: Home Page Builder
*/

mtm_load_wrap_header();

mtm_get_template_part( 'mtm-content', 'home' ); 

if( _get_field( 'mtm_enable_single_scroll_page' ) ) {

	mtm_get_template_part( 'mtm-logic', 'single-scroll' );
}

mtm_load_wrap_footer();