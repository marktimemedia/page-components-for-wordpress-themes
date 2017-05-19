<?php // Extra Content ?>

<h2 class="h1"><?php the_title(); ?><?php edit_post_link( '(Edit)', ' • ' ); ?></h2>
<div <?php post_class( 'mtm-component--main' ); ?>>
	<?php mtm_get_template_part( 'mtm-content', 'component-page' ); ?>
</div>
	
<?php mtm_get_template_part( 'mtm-content', 'extra-content' ); ?>
