<?php
/*
Template Name: Page Components
*/
?>

<?php mtm_load_wrap_header(); ?>

<?php // HIDES ACF FIELDS for use with WP password protect feature
 if( !post_password_required( $post )): ?>

	<section id="<?php echo $post->post_name; ?>">

		<section class="content--<?php echo $post->post_name; ?>">

			<div class="content--page">

				<?php mtm_get_template_part('mtm-logic', 'components'); ?>

			</div>

		</section>

	</section>

<?php endif; ?>

<?php mtm_load_wrap_footer(); ?>
