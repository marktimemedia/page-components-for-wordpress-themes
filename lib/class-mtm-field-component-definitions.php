<?php 
/**
 * Defining fields for modular content
 *
 * @package Mtm_Field_Definitions
 * @author Marktime Media
 **/
class Mtm_Field_Component_Definitions {

	/**
	* Unique Key of Parent
	*/
	public static $str_key_parent = 'field_565cb6189bf5c';

	/**
	* Unique Key of Archive Child
	*/
	public static $str_key_child = 'field_565cbc594ae15';

	/**
	* Unique Key of Archive Child 2
	*/
	public static $str_key_child2 = 'field_565cd752f6e89';

	/**
	* Values of Component Choices
	**/
	public static $arr_choices = array(
		'Standard Content' => 'Standard Content',
		'List Archive' => 'List Archive',
		'Grid Archive' => 'Grid Archive',
		'Tabs' => 'Tabs',
		'Call To Action' => 'Call To Action',
		'Extra Content' => 'Extra Content',
	);

	/**
	* Values of Archive Choices
	**/
	public static $arr_choices_child = array(
		'Pick From Taxonomy' => 'Pick From Taxonomy',
		'Pick Manually' => 'Pick Manually',
	);

	public function mtm_select_component( $label = 'Select Component', $choices = null, $key = null ){
		
		if( is_null( $key ) ) { $key = self::$str_key_parent; }
		if( is_null( $choices ) ) { $choices = self::$arr_choices; }

		return apply_filters( 'mtm_select_component_filter', array(
			'key' => $key,
			'label' => $label,
			'name' => 'mtm_select_component',
			'type' => 'radio',
			'instructions' => 'Select which type of component page we are creating',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => $choices,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'allow_null' => 0,
		));
	}

	public function mtm_list_archive_container( $label = 'List Archive', $value = 'List Archive', $key = null ){
		
		if( is_null( $key ) ) { $key = self::$str_key_parent; } 

		return apply_filters( 'mtm_list_archive_container_filter', array(
			'key' => 'field_565cb75b8c1af',
			'label' => $label,
			'name' => '',
			'type' => 'tab',
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
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		));
	}

	public function mtm_list_archive_select( $label = 'Select List Source', $choices = null, $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_child; }
		if( is_null( $choices ) ) { $choices = self::$arr_choices_child; }

		return apply_filters( 'mtm_list_archive_select_filter', array(
			'key' => $key,
			'label' => $label,
			'name' => 'mtm_list_archive_select',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => $choices,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'allow_null' => 0,
		));
	}

	public function mtm_list_archive_taxonomy( $label = 'Taxonomy Term List Selection', $value1 = 'List Archive', $value2 = 'Pick From Taxonomy', $key1 = null, $key2 = null ) {

		if( is_null( $key1 ) ) { $key1 = self::$str_key_parent; }
		if( is_null( $key2 ) ) { $key2 = self::$str_key_child; }

		return apply_filters( 'mtm_list_archive_taxonomy_filter', array(
			'key' => 'field_565cce669fa4b',
			'label' => 'Taxonomy Term List Selection',
			'name' => 'mtm_list_archive_taxonomy',
			'type' => 'taxonomy-chooser',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $key2,
						'operator' => '==',
						'value' => $value2,
					),
					array(
						'field' => $key1,
						'operator' => '==',
						'value' => $value1,
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'tax_type' => 0,
			'choices' => '',
			'type_value' => 1,
			'allow_null' => 0,
			'ui' => 0,
			'ajax' => 0,
			'multiple' => 0,

		));
	}

	public function mtm_list_archive_taxonomy_number( $label = 'Number of Items to Display', $value1 = 'List Archive', $value2 = 'Pick From Taxonomy', $key1 = null, $key2 = null ) {

		if( is_null( $key1 ) ) { $key1 = self::$str_key_parent; }
		if( is_null( $key2 ) ) { $key2 = self::$str_key_child; }
		
		return apply_filters( 'mtm_list_archive_taxonomy_number_filter', array(
			'key' => 'field_565cd42965450',
			'label' => 'Number of Items to Display',
			'name' => 'mtm_list_archive_taxonomy_number',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $key2,
						'operator' => '==',
						'value' => $value2,
					),
					array(
						'field' => $key1,
						'operator' => '==',
						'value' => $value1,
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 3,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		));
	}

	public function mtm_show_view_all_link( $label = 'Show View All Link?', $value1 = 'Pick From Taxonomy', $key1 = null ){

		if( is_null( $key1 ) ) { $key1 = self::$str_key_child; }

		return apply_filters( 'mtm_show_view_all_link_filter', array(
			'key' => 'field_578f8ed1ae54c',
			'label' => $label,
			'name' => 'mtm_show_view_all_link',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $key1,
						'operator' => '==',
						'value' => $value1,
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Yes, add a "View All" link to the bottom of this content',
			'default_value' => 0,
		));
	}

	public function mtm_list_archive_manual( $label = 'Manual List Selection', $value1 = 'List Archive', $value2 = 'Pick Manually', $key1 = null, $key2 = null ){
		
		if( is_null( $key1 ) ) { $key1 = self::$str_key_parent; }
		if( is_null( $key2 ) ) { $key2 = self::$str_key_child; }

		return apply_filters( 'mtm_list_archive_manual_filter', array(
			'key' => 'field_565cbcf34ae16',
			'label' => $label,
			'name' => 'mtm_list_archive_manual',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $key2,
						'operator' => '==',
						'value' => $value2,
					),
					array(
						'field' => $key1,
						'operator' => '==',
						'value' => $value1,
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
			),
			'taxonomy' => array(
			),
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
				2 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 1,
			'max' => '',
			'return_format' => 'object',
		));
	}

	public function mtm_tabs_container( $label = 'Tabs', $value = 'Tabs', $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_parent; }

		return apply_filters( 'mtm_tabs_container_filter', array(
			'key' => 'field_565cb92c8c1b0',
			'label' => $label,
			'name' => '',
			'type' => 'tab',
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
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		));
	}

	public function mtm_tab_repeater( $label = 'Add Tabs', $tablabel = 'Tab Title', $contentlabel = 'Content' ){
		return apply_filters( 'mtm_tab_repeater_filter', array(
			'key' => 'field_565cd5c57dc40',
			'label' => $label,
			'name' => 'mtm_tab_repeater',
			'type' => 'repeater',
			'instructions' => '',
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
			'button_label' => 'Add Row',
			'sub_fields' => array(
				array(
					'key' => 'field_565cd5e07dc41',
					'label' => $tablabel,
					'name' => 'mtm_tab_title',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => 30,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => 3,
					'new_lines' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key' => 'field_565cd5f07dc42',
					'label' => $contentlabel,
					'name' => 'mtm_tab_content',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => 70,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
			),
		));
	}

	public function mtm_grid_archive_container( $label = 'Grid Archive', $value = 'Grid Archive', $key = null ){
		
		if( is_null( $key ) ) { $key = self::$str_key_parent; } 

		return apply_filters( 'mtm_grid_archive_container_filter', array(
			'key' => 'field_565cb9d48c1b1',
			'label' => $label,
			'name' => '',
			'type' => 'tab',
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
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		));
	}

	public function mtm_grid_archive_select( $label = 'Select Grid Source', $choices = null, $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_child2; }
		if( is_null( $choices ) ) { $choices = self::$arr_choices_child; }

		return apply_filters( 'mtm_grid_archive_select_filter', array(
			'key' => $key,
			'label' => $label,
			'name' => 'mtm_grid_archive_select',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => $choices,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'allow_null' => 0,
		));
	}

	public function mtm_grid_archive_taxonomy( $label = 'Taxonomy Term Grid Selection', $value = 'Pick From Taxonomy', $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_child2; }

		return apply_filters( 'mtm_grid_archive_taxonomy_filter', array(
			'key' => 'field_565cd760f6e8a',
			'label' => $label,
			'name' => 'mtm_grid_archive_taxonomy',
			'type' => 'taxonomy-chooser',
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
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'tax_type' => 0,
			'choices' => '',
			'type_value' => 1,
			'allow_null' => 0,
			'ui' => 0,
			'ajax' => 0,
			'multiple' => 0,
		));
	}

	public function mtm_grid_archive_taxonomy_number( $label = 'Number of Items to Display', $value1 = 'Grid Archive', $value2 = 'Pick From Taxonomy', $key1 = null, $key2 = null ){

		if( is_null( $key1 ) ) { $key1 = self::$str_key_parent; }
		if( is_null( $key2 ) ) { $key2 = self::$str_key_child2; }

		return apply_filters( 'mtm_grid_archive_taxonomy_number_filter', array(
			'key' => 'field_565cd76bf6e8b',
			'label' => $label,
			'name' => 'mtm_grid_archive_taxonomy_number',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $key2,
						'operator' => '==',
						'value' => $value2,
					),
					array(
						'field' => $key1,
						'operator' => '==',
						'value' => $value1,
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
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		));
	}

	public function mtm_grid_archive_manual( $label = 'Manual Grid Selection', $value1 = 'Grid Archive', $value2 = 'Pick Manually', $key1 = null, $key2 = null ){
		
		if( is_null( $key1 ) ) { $key1 = self::$str_key_parent; }
		if( is_null( $key2 ) ) { $key2 = self::$str_key_child2; }

		return apply_filters( 'mtm_grid_archive_manual_filter', array(
			'key' => 'field_565cd79af6e8c',
			'label' => $label,
			'name' => 'mtm_grid_archive_manual',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $key2,
						'operator' => '==',
						'value' => $value2,
					),
					array(
						'field' => $key1,
						'operator' => '==',
						'value' => $value1,
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
			),
			'taxonomy' => array(
			),
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
				2 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => 1,
			'max' => '',
			'return_format' => 'object',
		));
	}

	public function mtm_taxonomy_list_container( $label = 'Taxonomy List', $value1 = 'Grid Archive', $value2 = 'List Archive', $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_parent; }

		return apply_filters( 'mtm_taxonomy_list_container_filter', array(
			'key' => 'field_567b01bba3b64',
			'label' => $label,
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $key,
						'operator' => '==',
						'value' => $value2,
					),
				),
				array(
					array(
						'field' => $key,
						'operator' => '==',
						'value' => $value1,
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		));
	}

	public function mtm_show_taxonomy_links( $label = 'Show Taxonomy Links', $value1 = 'List Archive', $value2 = 'Grid Archive', $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_parent; }

		return apply_filters( 'mtm_show_taxonomy_links_filter', array(
			'key' => 'field_565cd847f6e8d',
			'label' => $label,
			'name' => 'mtm_show_taxonomy_links',
			'type' => 'true_false',
			'instructions' => 'Show a list of all terms which link to their respective archives',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $key,
						'operator' => '==',
						'value' => $value2,
					),
				),
				array(
					array(
						'field' => $key,
						'operator' => '==',
						'value' => $value1,
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
		));
	}

	public function mtm_manual_archive_taxonomy( $label = 'Select Taxonomy Links Source', $value1 = 'Pick Manually', $value2 = 'Pick Manually', $key1 = null, $key2 = null ){

		if( is_null( $key1 ) ) { $key1 = self::$str_key_child; }
		if( is_null( $key2 ) ) { $key2 = self::$str_key_child2; }

		return apply_filters( 'mtm_manual_archive_taxonomy_filter', array(
			'key' => 'field_567af5c064029',
			'label' => $label,
			'name' => 'mtm_manual_archive_taxonomy',
			'type' => 'taxonomy-chooser',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $key1,
						'operator' => '==',
						'value' => $value1,
					),
					array(
						'field' => 'field_565cd847f6e8d',
						'operator' => '==',
						'value' => '1',
					),
				),
				array(
					array(
						'field' => 'field_565cd847f6e8d',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => $key2,
						'operator' => '==',
						'value' => $value2,
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'tax_type' => 1,
			'choices' => '',
			'type_value' => 1,
			'allow_null' => 0,
			'ui' => 0,
			'ajax' => 0,
			'multiple' => 0,
		));
	}

	public function mtm_cta_container( $label = 'Call To Action', $value = 'Call To Action', $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_parent; }

		return apply_filters( 'mtm_cta_container_filter', array(
			'key' => 'field_56a25f4f148a3',
			'label' => $label,
			'name' => '',
			'type' => 'tab',
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
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		));
	}

	public function mtm_cta_button_repeater( $label = 'CTA Buttons', $value = 'Call To Action', $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_parent; }

		return apply_filters( 'mtm_cta_button_repeater_filter', array(
			'key' => 'field_56a260b5148a6',
			'label' => $label,
			'name' => 'mtm_cta_button_repeater',
			'type' => 'repeater',
			'instructions' => 'Add call to action buttons that will lead to other pages, other sections within a page, or elsewhere.',
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
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_56a25f61148a4',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Button',
			'sub_fields' => array(
				array(
					'key' => 'field_56a25f61148a4',
					'label' => 'CTA Button Label',
					'name' => 'mtm_cta_button_label',
					'type' => 'text',
					'instructions' => 'The text that will show up on your call to action button',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
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
					'key' => 'field_56a2603e148a5',
					'label' => 'CTA Button Link',
					'name' => 'mtm_cta_button_link',
					'type' => 'text',
					'instructions' => 'URL destination of your button (such as another page within your site, an anchor tag on the same page, or somewhere else)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
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

	public function mtm_extra_content_container( $label = 'Extra Content', $value = 'Extra Content', $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_parent; }

		return apply_filters( 'mtm_extra_content_container_filter', array(
			'key' => 'field_5685b18361f65',
			'label' => $label,
			'name' => '',
			'type' => 'tab',
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
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		));
	}

	public function mtm_extra_content_area( $label = 'Extra Content Area', $value = 'Extra Content', $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_parent; }

		return apply_filters( 'mtm_extra_content_area_filter', array(
			'key' => 'field_5685b19061f66',
			'label' => $label,
			'name' => 'mtm_extra_content_area',
			'type' => 'wysiwyg',
			'instructions' => 'Use this to add a form, videos, or other content you want separated from the main content area',
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
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		));
	}

	// public function mtm( $label = '' ){
	// 	return apply_filters( '', array(

	// 	));
	// }
}