<?php // Component Content Logic

// List Archive
if( "List Archive" == _get_field( 'mtm_select_component' ) ) { 

	// Select a taxonomy to display list
	if( "Pick From Taxonomy" == _get_field( 'mtm_list_archive_select' ) ) { 
 
		mtm_get_template_part( 'mtm-component', 'taxonomy-list' );

	// Manually pick posts to display list	
	} else {

		mtm_get_template_part( 'mtm-component', 'manual-list' );

	} 
 
// Grid Archive
} elseif( "Grid Archive" == _get_field( 'mtm_select_component' ) ) {
	
	// Select a taxonomy to display grid
	if( "Pick From Taxonomy" == _get_field( 'mtm_grid_archive_select' ) ) { 
		
		mtm_get_template_part( 'mtm-component', 'taxonomy-grid' );

	// Manually pick posts to display grid
	} else {

		mtm_get_template_part( 'mtm-component', 'manual-grid' );
	} 

// Tabs
} elseif( "Tabs" == _get_field( 'mtm_select_component' ) ) {
	
	mtm_get_template_part( 'mtm-component', 'tabs' );

// CTA
} elseif( "Call To Action" == _get_field( 'mtm_select_component' ) ) {
	
	mtm_get_template_part( 'mtm-component', 'call-to-action' );

// Extra Content
} elseif( "Extra Content" == _get_field( 'mtm_select_component' ) ) {
	
	mtm_get_template_part( 'mtm-component', 'extra-content' );

// Standard Content or None Selected
} else {

	mtm_get_template_part( 'mtm-component', 'standard' );

}?>