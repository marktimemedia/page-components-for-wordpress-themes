<?php // Manual List Component

$list_posts = _get_field( 'mtm_list_archive_manual' );
$taxonomy = _get_field( 'mtm_manual_archive_taxonomy' ); 
$view = _get_field( 'mtm_show_view_all_link' );?>

<h2 class="h1"><?php the_title(); ?><?php edit_post_link( '(Edit)', ' • ' ); ?></h2>
<div <?php post_class( 'mtm-component--main' ); ?>>
	<?php mtm_get_template_part( 'mtm-content', 'component-page' ); ?>
</div>

<?php if( _get_field( 'mtm_show_taxonomy_links' ) ) :
	mtm_terms_from_taxonomy_links( $taxonomy ); // output taxonomy links
endif; ?>

<?php if( $list_posts ) : ?>
	
	<div class="mtm-component--content mtm-list--wrapper">
	
		<?php foreach( $list_posts as $post) : // variable must be called $post (IMPORTANT)
	
			setup_postdata( $post );

			mtm_get_template_part( 'mtm-content', 'list-view' ); 

		endforeach; // end foreach ?>

	</div>

	<?php wp_reset_postdata();

endif; // end list_posts