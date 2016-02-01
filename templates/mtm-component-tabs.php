<?php // Tab Component ?>

<div <?php post_class( 'mtm-component--main' ); ?>>
	<?php mtm_get_template_part( 'mtm-content', 'component-page' ); ?>
</div>

<?php mtm_get_template_part( 'mtm-content', 'tabs' );