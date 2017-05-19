<?php // Featured Content Boxes Logic

while( have_rows( 'mtm_home_featured_content_boxes' ) ): the_row(); // Loop through each item 

	// Specific Content
	if( "Specific Content" == _get_sub_field( 'mtm_home_featured_type' ) ) {
		
		$post_object = get_sub_field('mtm_home_featured_select_single');

		if( $post_object ) { 

			$post = $post_object;
			setup_postdata( $post ); 

			mtm_get_template_part( 'mtm-content', 'home-feature-select' );

		}

	// Show Latest Post
	} elseif( "Show Latest Post" == _get_sub_field( 'mtm_home_featured_type' ) ) {

		$home_tax_query = mtm_taxonomy_query_sub( 'home_featured', 1 );

		while( $home_tax_query->have_posts() ) {
			$home_tax_query->the_post();

			mtm_get_template_part( 'mtm-content', 'home-feature-select' );
		}

	// Manual Entry	
	} else {

		mtm_get_template_part( 'mtm-content', 'home-feature-manual' );

	}?>

<?php endwhile; ?>