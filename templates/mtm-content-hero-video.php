<?php // Hero Video/Media

$headline = get_the_title();

if( "Custom Headline" == get_sub_field( 'mtm_hero_select_title' ) ) {
	$headline = get_sub_field( 'mtm_hero_headline' );
} 
?>

<section class="mtm-module--hero mtm-hero-video">
	<div class="mtm-module--hero-media embed-container">

		<?php the_sub_field( 'mtm_hero_embed' ); ?>

	</div>
	<div class="mtm-module--hero-content mtm-hero-video-content">
		<h2 class="mtm-module--hero-title mtm-hero-video-title mtm-module-title"><?php esc_attr_e( $headline ) ?></h2>
		<div class="mtm-module--hero-subtitle mtm-hero-video-subtitle"><?php the_sub_field( 'mtm_hero_subheading' ); ?></div>

		<?php mtm_get_template_part( 'mtm-content', 'home-buttons' ); ?>

	</div>
</section>