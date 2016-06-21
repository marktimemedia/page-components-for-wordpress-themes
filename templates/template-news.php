<?php
/*
Template Name: News Page Builder
*/

mtm_load_wrap_header();

// News Homepage
mtm_get_template_part( 'mtm-layout', 'home-news' ); 

// Single Scroll
if( _get_field( 'mtm_enable_single_scroll_page' ) ) {

	mtm_get_template_part( 'mtm-logic', 'single-scroll' );
}

if( _get_field( 'mtm_enable_news_widgets' ) ) {
	echo 'hi';
}

mtm_load_wrap_footer();