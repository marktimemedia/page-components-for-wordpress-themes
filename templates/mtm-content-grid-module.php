<?php 
$image = _get_sub_field( 'mtm_list_item_image' ); ?>

<div class="mtm-grid--single">
	<div class="mtm-grid--single-content">

		<?php if ( $image ) : 
		
			$content_size = ''; 
			$thumb = $image['sizes'][ 'medium_large' ];
			$alt = $image['alt']; ?>

			<figure class="post--thumbnail"><img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_html( $alt ); ?>" /></figure>
		
		<?php endif; ?>
		
		<h4><?php the_sub_field( 'mtm_list_item_heading' ); ?></h4>
		<p><?php the_sub_field( 'mtm_list_item_content' ); ?></p>
	</div>
</div>