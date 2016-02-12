<section class="mtm-component mtm-component--home home-standard" style="background-image:url('<?php echo esc_url( mtm_acf_image_property( 'mtm_home_background_image', 'url' ) ); ?>')">

	<section class ="content--page">
	
		<h1><?php the_title(); ?><?php edit_post_link( '(Edit)', ' • ' ); ?></h1>
		<?php // the_content();

		// Something is filtering the_content, figure out what that is so I can change this
		$home_post = get_post( get_the_ID() );
		echo apply_filters( 'the_content', $home_post->post_content );

		// Buttons
		if( _get_field( 'mtm_home_button_repeater' ) ) {
	    	mtm_get_template_part( 'mtm-content', 'home-buttons' );
	    }

	    // Featured Image
		if ( has_post_thumbnail() ) : ?>
	            <figure class="post--thumbnail"><?php the_post_thumbnail( 'full' ) ?></figure>
	    <?php endif; ?>

	</section>

</section>

<?php

// Featured Content
if( _get_field( 'mtm_enable_featured_content' ) ) {

	mtm_get_template_part( 'mtm-logic', 'featured-content' );

} ?>