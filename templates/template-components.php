<?php
/*
Template Name: Page Components
*/
?>

<?php mtm_load_wrap_header(); ?>

	<section id="<?php echo $post->post_name; ?>">

		<section class="content--<?php echo $post->post_name; ?>">

			<div class="content--page">

				<?php mtm_get_template_part('mtm-logic', 'components'); ?>

			</div>

		</section>

	</section>

<?php mtm_load_wrap_footer(); ?>
