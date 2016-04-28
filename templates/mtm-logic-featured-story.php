<?php // Featured News Story Logic

// Latest Post
if( "Latest Post" == _get_field( 'mtm_home_select_featured_story_source' ) ) {
	
	$posttype = get_field( 'mtm_home_select_featured_story_type' );
	
	$news_post_query = mtm_page_component_post_query( $posttype );

	while( $news_post_query->have_posts() ) {
		$news_post_query->the_post();
		
		mtm_get_template_part( 'mtm-content', 'home-featured-story' );
	}

// Latest Taxonomy Post
} elseif( "Latest Post From Taxonomy" == _get_field( 'mtm_home_select_featured_story_source' ) ) {

	$news_tax_query = mtm_taxonomy_query( 'home_featured_story' );

	while( $news_tax_query->have_posts() ) {
		$news_tax_query->the_post();
		
		mtm_get_template_part( 'mtm-content', 'home-featured-story' );
	}

// Specific Post
} elseif( "Specific Post" == _get_field( 'mtm_home_select_featured_story_source' ) ) {

	$post_object = get_field('mtm_home_featured_story_select_single');

	if( $post_object ) { 

		$post = $post_object;
		setup_postdata( $post ); 
		
		mtm_get_template_part( 'mtm-content', 'home-featured-story' );
	}

}?>