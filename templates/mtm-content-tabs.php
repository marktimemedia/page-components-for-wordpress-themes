<?php if( have_rows( 'mtm_tab_repeater' ) ) { ?>

		<div class="mtm-component--content mtm-tabs--wrapper">

			<ul class="mtm-tabs--title-container">

				<?php $i = 1; ?>
				
				<?php while( have_rows( 'mtm_tab_repeater' ) ) { the_row(); // Loop through each tab title ?>
		
					<li class="mtm-tabs--title current" data-tab="tab-<?php echo $i++ ?>"><?php the_sub_field( 'mtm_tab_title' ); // sub field value goes here ?></li>
				
				<?php } ?>

			</ul>

			<?php reset_rows(); ?>

			<?php $i = 1; ?>
			
			<?php while( have_rows( 'mtm_tab_repeater' ) ) { the_row(); // Loop through each tab content ?>
	
				<div class="mtm-tabs--content current" id="tab-<?php echo $i++ ?>"><?php the_sub_field( 'mtm_tab_content' ); // sub field value goes here ?></div>
			
			<?php } ?>
		
		</div>		

<?php } // end have_rows 