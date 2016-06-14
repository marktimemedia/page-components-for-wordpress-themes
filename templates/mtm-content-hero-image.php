<?php 

$headline = get_the_title();

if( "Custom Headline" == get_sub_field( 'mtm_hero_select_title' ) ) {
	$headline = get_sub_field( 'mtm_hero_headline' );
}
?>

<section class="mtm-module--hero mtm-hero-image" style="background-image:url('<?php echo esc_url( mtm_acf_sub_image_property( 'mtm_hero_image', 'url' ) ); ?>')">
	<div class="mtm-module--hero-content mtm-hero-image-content">
		<h2 class="mtm-module--hero-title mtm-hero-image-title mtm-module-title"><?php esc_attr_e( $headline ) ?></h2>
		<div class="mtm-module--hero-subtitle mtm-hero-image-subtitle"><?php the_sub_field( 'mtm_hero_subheading' ); ?></div>
		
		<?php mtm_get_template_part( 'mtm-content', 'home-buttons' ); ?>

	</div>
</section>
