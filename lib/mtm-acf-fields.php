<?php 
/**
 * Registers all ACF Fields
 * 
 * To filter the layouts directly:
 * 
 * function my_mtm_layouts_filter( $array ){
 *
 *		// Add new fields to the end of the array
 *		array_push( $array, array( 'my_key' => my_array_function() ) );
 *		
 *		// Remove existing fields from the array
 *		unset( $array['field_key'] );
 *
 *		return $array;
 *	}
 *	add_filter( 'mtm_content_modules_layouts_filter', 'my_mtm_layouts_filter' );
 */

/**
* Modular Fields
*/
class Mtm_Acf_Add_Local_Field_Groups extends Mtm_Field_Groups {
	
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'mtm_add_field_groups' ), 2 );
	}

	public function mtm_add_field_groups() {

		if( function_exists( 'acf_add_local_field_group' ) ) {

			acf_add_local_field_group( $this->mtm_content_modules() );
		}	
	}
} // END class

new Mtm_Acf_Add_Local_Field_Groups();


/**
* Component Fields
*/
class Mtm_Acf_Add_Local_Field_Component_Groups extends Mtm_Field_Component_Groups {

	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'mtm_add_field_component_groups' ), 2 );
	}

	public function mtm_add_field_component_groups() {

		if( function_exists( 'acf_add_local_field_group' ) ) {

			acf_add_local_field_group( $this->mtm_field_components() );
			acf_add_local_field_group( $this->mtm_field_group_landing_page() );
			acf_add_local_field_group( $this->mtm_field_group_news_page() );
		}	
	}
} // END class

new Mtm_Acf_Add_Local_Field_Component_Groups();



/**
* Landing Page Fields
*/
// Todo


/**
* Original ACF field registration
* To be refactored as seen above
*/

if( function_exists('acf_add_local_field_group') ):

	// $mtm_field_groups = new Mtm_Field_Groups();

	// acf_add_local_field_group( $mtm_field_groups->mtm_content_modules() );

/** Background Image **/

acf_add_local_field_group(array (
	'key' => 'group_56831a6c39e46',
	'title' => 'Background Image',
	'fields' => array(
		array(
			'key' => 'field_565cdb92e45d7',
			'label' => 'Add Background Image',
			'name' => 'mtm_home_background_image',
			'type' => 'image',
			'instructions' => '(Optional) Add a background image to the homepage area',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'component',
				'operator' => '==',
				'value' => '../templates/template-home.php',
			),
		),
	),
	'menu_order' => 100,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;