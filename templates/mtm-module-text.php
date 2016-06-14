<?php // Module: Text Single & Dual

if( get_sub_field( 'mtm_text_area_title' ) ) : ?>

	<h2 class="mtm-module--content-heading mtm-module-title"><?php the_sub_field( 'mtm_text_area_title' ) ?></h2>

<?php endif; 

if( get_sub_field( 'mtm_module_text_area' ) ) : ?>

	<div class="mtm-module--content-primary">
		<?php the_sub_field( 'mtm_module_text_area' ) ?>
	</div>

<?php endif;

if( get_sub_field( 'mtm_module_text_area_2' ) ) : ?>

	<div class="mtm-module--content-secondary">
			<?php the_sub_field( 'mtm_module_text_area_2' ) ?>
	</div>

<?php endif; ?>