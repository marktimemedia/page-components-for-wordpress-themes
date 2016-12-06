<?php
/**
 * Contains the default values for all component field groups
 *
 * @package Mtm_Field_Component_Definitions
 * @author Marktime Media
 **/
class Mtm_Field_Component_Groups extends Mtm_Field_Component_Definitions {

	/**
	* Label for Groups
	*/
	public static $str_label = 'Components';

	/**
	* Array of Locations
	*/
	public static $arr_location = array(
		array(
			'param' => 'component',
			'operator' => '==',
			'value' => '../templates/template-components.php',
		),
	);

	/**
	* Unique Key
	*/
	public static $str_key = 'group_565cb5e35a2af';


	public function __construct() {

		add_action( 'init', array( $this, 'mtm_field_components' ) );
	}

	/**
	* Register field group with ACF
	*/
	public function mtm_field_components( $label = null, array $location = null, $key = null ) {

		if( is_null( $label ) ) { $label = self::$str_label; }
		if( is_null( $location ) ) { $location = self::$arr_location; }
		if( is_null( $key ) ) { $key = self::$str_key; }

		return apply_filters( 'mtm_field_components_filter', array(
			'key' => $key,
			'title' => 'Components',
			'fields' => apply_filters( 'mtm_field_components_fields_filter', array(
				'mtm_select_component' => $this->mtm_select_component(),
				'mtm_list_archive_container' => $this->mtm_list_archive_container(),
				'mtm_list_archive_select' => $this->mtm_list_archive_select(),
				'mtm_list_archive_taxonomy' => $this->mtm_list_archive_taxonomy(),
				'mtm_show_view_all_link' => $this->mtm_show_view_all_link(),
				'mtm_list_archive_manual' => $this->mtm_list_archive_manual(),
				'mtm_tabs_container' => $this->mtm_tabs_container(),
				'mtm_tab_repeater' => $this->mtm_tab_repeater(),
				'mtm_grid_archive_container' => $this->mtm_grid_archive_container(),
				'mtm_grid_archive_select' => $this->mtm_grid_archive_select(),
				'mtm_grid_archive_taxonomy' => $this->mtm_grid_archive_taxonomy(),
				'mtm_grid_archive_taxonomy_number' => $this->mtm_grid_archive_taxonomy_number(),
				'mtm_grid_archive_manual' => $this->mtm_grid_archive_manual(),
				'mtm_taxonomy_list_container' => $this->mtm_taxonomy_list_container(),
				'mtm_show_taxonomy_links' => $this->mtm_show_taxonomy_links(),
				'mtm_manual_archive_taxonomy' => $this->mtm_manual_archive_taxonomy(),
				'mtm_cta_container' => $this->mtm_cta_container(),
				'mtm_cta_button_repeater' => $this->mtm_cta_button_repeater(),
				'mtm_extra_content_container' => $this->mtm_extra_content_container(),
				'mtm_extra_content_area' => $this->mtm_extra_content_area(),
				)
			),
			'location' => array( $location ),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
		));
	}
}