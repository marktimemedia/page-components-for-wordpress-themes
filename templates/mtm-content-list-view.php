<article class="mtm-list--single">

	<?php 
	$content_size = '-full';

	if ( has_post_thumbnail() ) : 
	$content_size = ''; ?>

		<section class="mtm-list--image">
			<?php the_mtm_post_thumbnail( 'medium_large', 'mtm-list--image-single' ); ?>
		</section>

	<?php endif; ?>

	<section class="mtm-list--post-content<?php echo $content_size; ?>">
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<p class="post--byline"><?php the_time( 'F j, Y' ); ?></p>
		<p><?php the_excerpt(); ?></p>
	</section>
</article>