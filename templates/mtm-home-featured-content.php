<?php // Home Feature (ACF Repeater Field)

if( have_rows( 'mtm_home_featured_content_boxes' ) ): ?>

	<div class="mtm-component mtm-home-featured">
		<section class="content--page content--home-featured">

			<?php mtm_get_template_part( 'mtm-logic', 'featured-content' ); ?>

		</section>
	</div>

<?php endif; // End ACF Repeater Field ?>