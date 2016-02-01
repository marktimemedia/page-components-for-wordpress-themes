<?php // Manual Grid Component

$grid_posts = _get_field( 'mtm_grid_archive_manual' );
$taxonomy = get_field( 'mtm_manual_archive_taxonomy' ); ?>

<div <?php post_class( 'mtm-component--main' ); ?>>
	<?php mtm_get_template_part( 'mtm-content', 'component-page' ); ?>
</div>

<?php if( _get_field( 'mtm_show_taxonomy_links' ) ) {
	mtm_terms_from_taxonomy_links( $taxonomy ); // output taxonomy
} ?>

<?php if( $grid_posts ) { ?>

	<div class="mtm-component--content mtm-grid--wrapper">
	
		<?php foreach( $grid_posts as $post) { // variable must be called $post (IMPORTANT)
	
			setup_postdata( $post );

			mtm_get_template_part( 'mtm-content', 'grid-view' ); 

		} // end foreach ?>

	</div>

	<?php wp_reset_postdata();

} // end grid_posts