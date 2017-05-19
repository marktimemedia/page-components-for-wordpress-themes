<div class="mtm-home-featured--story">
		
	<div class="mtm-home-featured--story-image">	
		<?php the_mtm_post_thumbnail( 'medium_large' ); ?>
	</div>

	<div class="mtm-home-featured--story-text">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<?php //if( _get_field( 'mtm_home_show_featured_excerpt' ) ) {
			the_excerpt(); 
		//}?>
	</div>
</div>

<?php wp_reset_postdata(); ?>