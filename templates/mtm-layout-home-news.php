<?php // If there's no featured story, display home news content full width

$class='';
if( "No Featured Story" == _get_field( 'mtm_home_select_featured_story_source' ) ) { 
	$class = 'full';
} ?>

<section class="mtm-component mtm-component--home home-news" style="background-image:url('<?php echo esc_url( mtm_acf_image_property( 'mtm_home_background_image', 'url' ) ); ?>')">

	<section class ="content--page">

		<div class="mtm-home-news--content <?php echo $class; ?>">
	
			<h1><?php the_title(); ?><?php edit_post_link( '(Edit)', ' • ' ); ?></h1>
			<?php // the_content(); ?>

			<?php // Something is filtering the_content, figure out what that is so I can change this
			$home_post = get_post( get_the_ID() );
			echo apply_filters( 'the_content', $home_post->post_content );
			?>

			<?php if ( has_post_thumbnail() ) : ?>

		            <figure class="post--thumbnail"><?php the_post_thumbnail( 'full' ) ?></figure>

		    <?php endif; ?>

		    <?php if ( is_active_sidebar( 'news-page-sidebar' ) ) {
 
    			dynamic_sidebar( 'news-page-sidebar' );
 
			}?>

		</div>

	    <?php // Featured Story
		if( "No Featured Story" != _get_field( 'mtm_home_select_featured_story_source' ) ) {  ?>

			<?php mtm_get_template_part( 'mtm-logic', 'featured-story' ); ?>

		<?php } ?>

	</section>

</section>

<?php


// Topics
if( _get_field( 'mtm_home_topic_sections' ) ) {

	mtm_get_template_part( 'mtm-logic', 'topic-sections' );
		
} ?>