<?php // Hero Video/Media

// Video
if( "Video" == get_sub_field( 'mtm_hero_select_media' ) ) : ?>
	
	<?php mtm_get_template_part( 'mtm-content', 'hero-video' ); ?>

<?php // Other TODO: Unique Media Template
elseif( "Other Media" == get_sub_field( 'mtm_hero_select_media' ) ) : ?>
	
	<?php mtm_get_template_part( 'mtm-content', 'hero-video' ); ?>

<?php endif; ?>
