<?php // Manual Grid Component

global $mtm_grid_row_class;

$grid_posts = _get_field( 'mtm_grid_archive_manual' );
$taxonomy = _get_field( 'mtm_manual_archive_taxonomy' );
$view = _get_field( 'mtm_show_view_all_link' ); 
$mtm_grid_row_class = mtm_output_row_number(); 
?>

<h2 class="h1"><?php the_title(); ?><?php edit_post_link( '(Edit)', ' • ' ); ?></h2>
<div <?php post_class( 'mtm-component--main' ); ?>>
	<?php mtm_get_template_part( 'mtm-content', 'component-page' ); ?>
</div>

<?php if( _get_field( 'mtm_show_taxonomy_links' ) ) :
	mtm_terms_from_taxonomy_links( $taxonomy ); // output taxonomy links
endif; ?>

<?php if( $grid_posts ) : ?>

	<div class="mtm-component--content mtm-grid--wrapper">
	
		<?php foreach( $grid_posts as $post) : // variable must be called $post (IMPORTANT)
	
			setup_postdata( $post );

			mtm_get_template_part( 'mtm-content', 'grid-view' ); 

		endforeach; // end foreach ?>

	</div>

	<?php wp_reset_postdata();

endif; // end grid_posts

if( $view ) : // View All Link ?>

	<a class="mtm-view-all-link" href="<?php echo get_site_url() . '/' . $taxonomy . '/'. $terms; ?>"><?php _e( 'View All', 'mtm' ); ?></a>

<?php endif; ?>