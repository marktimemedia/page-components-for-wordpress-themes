<?php // Hero Video/Media
$headline = ( ( 'Custom Headline' == get_sub_field( 'mtm_hero_select_title' ) ) ? get_sub_field( 'mtm_hero_headline' ) : get_the_title() );
?>

<section class="mtm-module--hero mtm-hero-video">
	<div class="mtm-module--hero-media embed-container video-asset">

		<?php the_sub_field( 'mtm_hero_embed' ); ?>

	</div>
	<div class="mtm-module--hero-content mtm-hero-video-content">
		<h2 class="mtm-module--hero-title mtm-hero-video-title mtm-module-title"><?php esc_attr_e( $headline ) ?></h2>
		<?php if( get_sub_field( 'mtm_hero_subheading' ) ): ?>
			<div class="mtm-module--hero-subtitle mtm-hero-video-subtitle"><?php the_sub_field( 'mtm_hero_subheading' ); ?></div>
		<?php endif; ?>
		<?php mtm_get_template_part( 'mtm-content', 'home-buttons' ); ?>

	</div>
</section>