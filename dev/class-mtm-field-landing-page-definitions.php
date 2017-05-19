<?php 
/**
 * Defining fields for modular content
 *
 * @package Mtm_Field_Definitions
 * @author Marktime Media
 **/
class Mtm_Field_Landing_Page_Definitions {

	/**
	* Unique Key of Feature Box
	*/
	public static $str_key_features = 'field_568314207680d';

	public function mtm_enable_single_scroll_page( $label = 'Enable Single Scroll Page?' ){
		return apply_filters( 'mtm_enable_single_scroll_page_filter', array(
			'key' => 'field_565e2f81c08ca',
			'label' => $label,
			'name' => 'mtm_enable_single_scroll_page',
			'type' => 'true_false',
			'instructions' => 'This will enable you to build a long, "single scroll" style page using other pages on your site',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Yes, I would like to show other page content underneath the landing page content',
			'default_value' => 0,
		));
	}

	public function mtm_landing_page_container( $label = 'Standard Landing Page Options' ){
		return apply_filters( 'mtm_landing_page_container_filter', array(
			'key' => 'field_56bcbd4fab425',
			'label' => $label,
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		));
	}

	public function mtm_home_button_repeater( $label = 'Add Buttons' ){
		return apply_filters( 'mtm_home_button_repeater_filter', array(
			'key' => 'field_565cdb25b1d30',
			'label' => $label,
			'name' => 'mtm_home_button_repeater',
			'type' => 'repeater',
			'instructions' => '(Optional) Add call to action buttons to the main landing page area',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Button',
			'sub_fields' => array(
				array(
					'key' => 'field_565cdb44b1d31',
					'label' => 'Button Label',
					'name' => 'mtm_home_button_label',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => 50,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key' => 'field_565cdb53b1d32',
					'label' => 'Button Link',
					'name' => 'mtm_home_button_link',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => 50,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		));
	}

	public function mtm_enable_featured_content( $label = 'Enable Featured Content Boxes?', $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_features; }

		return apply_filters( 'mtm_enable_featured_content_filter', array(
			'key' => $key,
			'label' => $label,
			'name' => 'mtm_enable_featured_content',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => 50,
				'class' => '',
				'id' => '',
			),
			'message' => 'Yes, show Featured Content Boxes on the landing page',
			'default_value' => 0,
		));
	}

	public function mtm_grid_archive_per_row( $label = 'Number of feature boxes per row', $value = '1', $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_features; }

		return apply_filters( 'mtm_grid_archive_per_row_filter', array(
			'key' => 'field_576c1c0c9ba43',
			'label' => $label,
			'name' => 'mtm_grid_archive_per_row',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $key,
						'operator' => '==',
						'value' => $value,
					),
				),
			),
			'wrapper' => array(
				'width' => 50,
				'class' => '',
				'id' => '',
			),
			'default_value' => 3,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => 1,
			'max' => 6,
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		));
	}

	public function mtm( $label = '' ){
		return apply_filters( '', array(

		));
	}
}