<?php // List/Grid (ACF Repeater Field)

if( get_sub_field( 'mtm_list_title' ) ): ?>

	<h2 class="mtm-module-title"><?php the_sub_field( 'mtm_list_title' ); ?></h2>

<?php endif;

	
if( 'Pick From Taxonomy' == get_sub_field( 'mtm_list_archive_select' ) ) : // Taxonomy Source ?>

	<div class="mtm-module--grid">

		<?php $list_query = mtm_taxonomy_query_sub( 'list' );
		$taxonomy = mtm_acf_taxonomy_sub_property( 'list', 'taxonomy' );

		while( $list_query->have_posts() ) :

			$list_query->the_post();

			mtm_get_template_part( 'mtm-content', 'grid-view' );

		endwhile;

		wp_reset_postdata(); ?>	

	</div>

<?php else : // Manual Source (repeater)

	if( have_rows( 'mtm_add_list_item' ) ) : // Repeater ?>

		<div class="mtm-module--grid">

			<?php while( have_rows( 'mtm_add_list_item' ) ): the_row(); // Loop through each itemm

				mtm_get_template_part( 'mtm-content', 'grid-module' ); 

			endwhile; ?>

		</div>	
	
	<?php endif; // End Rows
	
endif; // End Pick from Source



	



