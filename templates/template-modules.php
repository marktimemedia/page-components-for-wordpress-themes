<?php
/*
Template Name: Modular Content Page
Template Post Type: post, page
*/

mtm_load_wrap_header(); ?>

<?php // HIDES ACF FIELDS for use with WP password protect feature
 if( !post_password_required( $post )): ?>

	<section class="content--page">

		<?php mtm_get_template_part('mtm-logic', 'modules'); ?>

	</section>

<?php endif; ?>

<?php mtm_load_wrap_footer(); ?>