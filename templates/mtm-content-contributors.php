<?php // Contributors Component

$mtm_grid_row_class = mtm_output_row_number(5); 

if( $users = get_field( 'mtm_user_picker' ) ) : ?>

	<div class="mtm-component--content mtm-user-picker">
		
		<?php foreach( $users as $user ) : ?>
			<div class="mtm-user-picker--user <?php echo $mtm_grid_row_class; ?>">
				<a href="<?php echo esc_url( get_author_posts_url( $user['ID'] ) ); ?>"><figure><?php echo get_avatar( $user['ID'], 512 ); // outputs complete image tag ?></figure></a>
				<h4><a href="<?php echo esc_url( get_author_posts_url( $user['ID'] ) ); ?>"><?php echo esc_html( $user['display_name'] ); ?></a></h4>
				<p><?php echo esc_html( $user['user_description'] ); ?></p>
			</div>
		<?php endforeach; ?>

	</div>		

<?php endif; 