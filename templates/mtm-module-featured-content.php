<?php // Home Feature (ACF Repeater Field)

if( have_rows( 'mtm_home_featured_content_boxes' ) ): ?>

	<?php mtm_get_template_part( 'mtm-logic', 'featured-content' ); ?>

<?php endif; // End ACF Repeater Field ?>