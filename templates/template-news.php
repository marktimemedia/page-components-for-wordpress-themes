<?php
/*
Template Name: News Page Builder
*/

mtm_load_wrap_header();

// HIDES ACF FIELDS for use with WP password protect feature
if( !post_password_required( $post )):

	// News Homepage
	mtm_get_template_part( 'mtm-layout', 'home-news' ); 

	// Single Scroll
	if( _get_field( 'mtm_enable_single_scroll_page' ) ) {

		mtm_get_template_part( 'mtm-logic', 'single-scroll' );
	}

else: ?>
	<section id="<?php echo $post->post_name; ?>">

		<?php echo get_the_password_form(); ?>
		
	</section>

<?php endif;

mtm_load_wrap_footer();