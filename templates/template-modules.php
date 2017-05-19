<?php
/*
Template Name: Modular Content Page
Template Post Type: post, page
*/

mtm_load_wrap_header(); ?>

<section class="content--page">

	<?php // HIDES ACF FIELDS for use with WP password protect feature
 	if( !post_password_required( $post )): ?>

	<?php mtm_get_template_part('mtm-logic', 'modules'); ?>

	<?php else:

		echo get_the_password_form();

	endif; ?>

</section>

<?php mtm_load_wrap_footer(); ?>