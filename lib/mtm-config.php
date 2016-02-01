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

// Check to make sure the ACF Options Page plugin isn't already declaring support for the_mtm_post_thumbnail, found in the template files
// If not, create a new the_mtm_post_thumbnail that doesn't have the fallback
function mtm_thumb_options() {
	if ( function_exists( 'the_mtm_post_thumbnail' ) ) {
		return false;
	}
	return true;
}
add_action( 'plugins_loaded', 'mtm_thumb_options' );


if ( mtm_thumb_options() ) {

	// Outputs the post thumbnail without using default image
	function the_mtm_post_thumbnail( $size = 'full', $class = '', $link = true, $attr ='' ) {

		if ( has_post_thumbnail() ) {
			
			if( $link ) { ?> <a href="<?php the_permalink(); ?>"> <?php } ?>
				<figure class="post--thumbnail <?php echo $class; ?>"> <?php the_post_thumbnail( $size, $attr ); ?> </figure>
			<?php if( $link ) { ?> </a> <?php }
		}
	}
}

