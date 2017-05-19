<?php // Single Scroll Select (ACF Relationship Field)

$scroll_posts = get_field( 'mtm_select_pages' );

if( $scroll_posts ):

	$j=1;
	
	foreach( $scroll_posts as $post): // variable must be called $post (IMPORTANT)
	
		setup_postdata( $post ); ?>

		<section id="<?php echo $post->post_name; ?>" class= "mtm-component mtm-section-<?php echo $j++; ?>">

			<section class="content--<?php echo $post->post_name; ?>">

				<div class="content--page">

					<?php mtm_get_template_part('mtm-logic', 'components'); ?>

				</div>

			</section>

		</section>

	<?php endforeach;

	wp_reset_postdata();

endif;