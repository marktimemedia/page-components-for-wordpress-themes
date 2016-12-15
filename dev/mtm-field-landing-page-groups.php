<?php
/**
 * Contains the default values for all component field groups
 *
 * @package Mtm_Field_Landing_Page_Definitions
 * @author Marktime Media
 **/
class Mtm_Field_Landing_Page_Groups extends Mtm_Field_Landing_Page_Definitions {

	/**
	* Label for Groups
	*/
	public static $str_label = 'Landing Page Content Options';

	/**
	* Array of Locations
	*/
	public static $arr_location = array(
		array(
			'param' => 'component',
			'operator' => '==',
			'value' => '../templates/template-home.php',
		),
	);

	/**
	* Unique Key
	*/
	public static $str_key = 'group_565cb5e35a2af';


	public function __construct() {

		add_action( 'init', array( $this, 'mtm_field_landing_page' ) );
	}

	/**
	* Register field group with ACF
	*/
	public function mtm_field_landing_page( $label = null, array $location = null, $key = null ) {

		if( is_null( $label ) ) { $label = self::$str_label; }
		if( is_null( $location ) ) { $location = self::$arr_location; }
		if( is_null( $key ) ) { $key = self::$str_key; }

		return apply_filters( 'mtm_field_landing_page_filter',  array(
			'key' => $key,
			'title' => $label,
			'fields' => array(

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
		)));
	}
}