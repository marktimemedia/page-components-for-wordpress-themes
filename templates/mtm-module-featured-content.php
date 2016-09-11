<?php // Home Feature (ACF Repeater Field)

global $mtm_home_feature_count;
$mtm_home_feature_count = count( get_sub_field( 'mtm_home_featured_content_boxes' ) );

if( get_sub_field( 'mtm_text_area_title' ) ) : ?>

	<h2 class="mtm-module--content-heading mtm-module-title"><?php the_sub_field( 'mtm_text_area_title' ) ?></h2>

<?php endif; 

if( have_rows( 'mtm_home_featured_content_boxes' ) ): 

	mtm_get_template_part( 'mtm-logic', 'featured-content' ); ?>

<?php endif; // End ACF Repeater Field ?>