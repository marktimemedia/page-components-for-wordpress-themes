<?php // List/Grid (ACF Repeater Field)

if( get_sub_field( 'mtm_list_title' ) ): ?>

	<h3 class="mtm-module-title"><?php the_sub_field( 'mtm_list_title' ); ?></h3>

<?php endif;

if( 'Grid' == get_sub_field( 'mtm_select_list_or_grid' ) ): // Grid

	if( have_rows( 'mtm_add_list_item' ) ): // Repeater ?>

		<div class="mtm-module--listgrid">

			<?php while( have_rows( 'mtm_add_list_item' ) ): the_row(); // Loop through each item 

				mtm_get_template_part( 'mtm-content', 'grid-module' ); 

			endwhile; ?>

		</div>

	<?php endif; // End ACF Repeater Field 

else: // List

	if( have_rows( 'mtm_add_list_item' ) ): // Repeater ?>

		<div class="mtm-module--listgrid">

			<?php while( have_rows( 'mtm_add_list_item' ) ): the_row(); // Loop through each item 

				mtm_get_template_part( 'mtm-content', 'list-module' ); 

			endwhile; ?>

		</div>

	<?php endif; // End ACF Repeater Field 

endif; ?>

