<?php // Module: Call To Action

if( get_sub_field( 'mtm_cta_headline' ) ) : ?>

	<h3 class="mtm-module--cta-heading mtm-module-title">
		<?php the_sub_field( 'mtm_cta_headline' ) ?>
	</h3>

<?php endif;

if( get_sub_field( 'mtm_cta_subheading' ) ) : ?>

	<div class="mtm-module--cta-subheading">
		<?php the_sub_field( 'mtm_cta_subheading' ) ?>
	</div>

<?php endif; 

if( get_sub_field( 'mtm_cta_button_repeater' ) ) : 

	if( have_rows( 'mtm_cta_button_repeater' ) ): 

		$j=1; ?>

		<div class="mtm-module--cta-buttons">

			<?php while( have_rows( 'mtm_cta_button_repeater' ) ): the_row(); // Loop through each item ?>

				<a class="button mtm-button cta-button cta-<?php echo $j++; ?>" href="<?php esc_url( the_sub_field( 'mtm_cta_button_link' ) ); ?>"><?php the_sub_field( 'mtm_cta_button_label' ); // sub field value goes here ?></a>
			
			<?php endwhile; ?>

		</div>

	<?php endif; // End ACF Repeater Field 

endif; 

