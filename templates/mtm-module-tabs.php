<?php //Tabs 
$rows = get_sub_field( 'mtm_tab_repeater' );

if( $rows ) : ?>

	<div class="mtm-tabs--wrapper mtm-module--tabs">

		<ul class="mtm-tabs--title-container">

			<?php $i = 1; ?>

			<?php foreach( $rows as $row ) : ?>
				<li class="mtm-tabs--title current" data-tab="tab-<?php echo $i++ ?>"><?php echo $row[ 'mtm_tab_title' ]; // sub field value goes here ?></li>
			<?php endforeach; ?>

		</ul>

		<?php $j = 1; ?>

		<?php foreach( $rows as $row ) : ?>
			<div class="mtm-tabs--content current" id="tab-<?php echo $j++ ?>"><?php echo $row[ 'mtm_tab_content' ]; // sub field value goes here ?></div>
		<?php endforeach; ?>
	
	</div>		

<?php endif; // end have_rows 