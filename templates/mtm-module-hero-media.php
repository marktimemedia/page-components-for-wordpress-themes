<?php // Hero Image/Video/Other

// Image
if( "Image" == get_sub_field( 'mtm_hero_select_media' ) ) : ?>
	
	<?php mtm_get_template_part( 'mtm-content', 'hero-image' ); ?>

<?php // Video
elseif( "Video" == get_sub_field( 'mtm_hero_select_media' ) ) : ?>
	
	<?php mtm_get_template_part( 'mtm-content', 'hero-video' ); ?>

<?php // Other
elseif( "Other" == get_sub_field( 'mtm_hero_select_media' ) ) : ?>
	
	<?php mtm_get_template_part( 'mtm-content', 'hero-video' ); ?>

<?php endif; ?>
