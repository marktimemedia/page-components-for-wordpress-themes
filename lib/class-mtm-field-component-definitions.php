<?php 
/**
 * Defining fields for component page content
 *
 * @package Mtm_Field_Component_Definitions
 * @author Marktime Media
 **/
class Mtm_Field_Component_Definitions {

	/**
	* Unique Key of Parent
	*/
	public static $str_key_parent = 'field_565cb6189bf5c'; // for archives
	public static $str_key_parent2 = 'field_565e2f81c08ca'; // for conditional single scroll
	public static $str_key_parent3 = 'field_568314207680d'; // for conditional feature boxes

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
		'Contributors'	=> 'Contributors'
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

	public function mtm_show_view_all_link_2( $label = 'Show View All Link?', $value1 = 'Pick From Taxonomy', $key1 = null ){

		if( is_null( $key1 ) ) { $key1 = self::$str_key_child2; }

		return apply_filters( 'mtm_show_view_all_link_filter', array(
			'key' => 'field_578f8ed1ae54c_2',
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

	public function mtm_randomize_posts( $label = 'Post Order', $value = 'Pick From Taxonomy', $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_child; }

		return apply_filters( 'mtm_randomize_posts_filter', array(
			'key' => 'field_5783e5dabcde03495comp',
			'label' => 'Randomize Posts?',
			'name' => 'mtm_randomize',
			'type' => 'true_false',
			'instructions' => '',
			'required' => '',
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
			'message' => '',
			'default_value' => 0,
		));
	}

	public function mtm_randomize_posts_2( $label = 'Post Order', $value = 'Pick From Taxonomy', $key = null ){

		if( is_null( $key ) ) { $key = self::$str_key_child2; }

		return apply_filters( 'mtm_randomize_posts_2_filter', array(
			'key' => 'field_5783e5dabcde03495comp2',
			'label' => 'Randomize Posts?',
			'name' => 'mtm_randomize',
			'type' => 'true_false',
			'instructions' => '',
			'required' => '',
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
			'message' => '',
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
			'button_label' => 'Add New Tabs',
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

	public function mtm_grid_archive_taxonomy_number( $label = 'Number of Items to Display', $value2 = 'Pick From Taxonomy', $key1 = null, $key2 = null ){

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

	/*
	* Landing Page Choices
	*/

	// single scroll page toggle
	public function mtm_enable_single_scroll_page( $label = 'Enable Single Scroll Page?', $key = null ){
		if( is_null( $key ) ) { $key = self::$str_key_parent2; }

		return apply_filters( 'mtm_enable_single_scroll_page_filter', array(
			'key' => $key,
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
			'message' => 'Yes, I would like to show other page content (as a single-scroll page) underneath the main page content',
			'default_value' => 0,
		));
	}

	// feature box toggle
	public function mtm_enable_featured_content( $label = 'Enable Featured Content Boxes?', $key = null ){
		if( is_null( $key ) ) { $key = self::$str_key_parent3; }

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
			'message' => 'Yes, show Featured Content Boxes on the page',
			'default_value' => 0,
		));
	}

	// page options tab
	public function mtm_page_options_tab( $label = 'Page Options', $key = 'field_56bcbd4fab425' ){
		return apply_filters( 'mtm_page_options_tab_filter', array(
			'key' => $key,
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

	// single scroll tab with conditional logic
	public function mtm_single_scroll_options_tab( $label = 'Single Scroll Options', $key = 'field_56bcbdcb85f77', $parent = null ){

		if( is_null( $parent ) ) { $parent = self::$str_key_parent2; }

		return apply_filters( 'mtm_single_scroll_options_tab_filter', array(
			'key' => $key,
			'label' => $label,
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $parent,
						'operator' => '==',
						'value' => '1',
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

	// single scroll page select
	public function mtm_single_scroll_page_select( $label = 'Select Pages', $key = 'field_565e2fa2c08cb', $parent = null ){

		if( is_null( $parent ) ) { $parent = self::$str_key_parent2; }

		return apply_filters( 'mtm_single_scroll_page_select_filter', array(
			'key' => $key,
			'label' => $label,
			'name' => 'mtm_select_pages',
			'type' => 'relationship',
			'instructions' => 'Select and re-order other pages, which will display in sections below the main content on this page. To make sure special features are enabled, make sure your selected pages are using the Page Components template.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $parent,
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'page',
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
			'min' => '',
			'max' => '',
			'return_format' => 'object',
		));
	}

	public function mtm_home_buttons_repeater( $label = 'Add Buttons', $key = 'field_565cdb25b1d30' ) {
		return apply_filters('mtm_home_buttons_repeater_filter', array(
			'key' => $key,
			'label' => $label,
			'name' => 'mtm_home_button_repeater',
			'type' => 'repeater',
			'instructions' => '(Optional) Add call to action buttons to the main page area',
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

	public function mtm_home_feature_boxes_per_row( $label = 'Number of feature boxes per row', $key = 'field_576c1c0c9ba43', $parent = null ) {
		
		if( is_null( $parent ) ) { $parent = self::$str_key_parent3; }

		return apply_filters('mtm_home_feature_boxes_per_row_filter', array(
			'key' => $key,
			'label' => $label,
			'name' => 'mtm_grid_archive_per_row',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $parent,
						'operator' => '==',
						'value' => '1',
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


	public function mtm_home_feature_boxes( $label = 'Add Featured Content Boxes', $key = 'field_56830bcd85f0e', $parent = null ){

		if( is_null( $parent ) ) { $parent = self::$str_key_parent3; }

		return apply_filters( 'mtm_home_feature_boxes_filter', array(
			'key' => $key,
			'label' => $label,
			'name' => 'mtm_home_featured_content_boxes',
			'type' => 'repeater',
			'instructions' => '(Optional) Add featured content boxes to the page',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $parent,
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_56830c0e85f0f',
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Flexible Content Box',
			'sub_fields' => array(
				array(
					'key' => 'field_56830c0e85f0f',
					'label' => 'Which Type Of Featured Content?',
					'name' => 'mtm_home_featured_type',
					'type' => 'radio',
					'instructions' => 'Select the type of featured content you want this to be',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => 50,
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'Specific Content' => 'Specific Content',
						'Show Latest Post' => 'Show Latest Post',
						'Manual Entry' => 'Manual Entry',
					),
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
					'layout' => 'horizontal',
					'allow_null' => 0,
				),
				array(
					'key' => 'field_56830ef012152',
					'label' => 'Content Box Title',
					'name' => 'mtm_home_featured_box_title',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_56830c0e85f0f',
								'operator' => '==',
								'value' => 'Show Latest Post',
							),
						),
						array(
							array(
								'field' => 'field_56830c0e85f0f',
								'operator' => '==',
								'value' => 'Specific Content',
							),
						),
					),
					'wrapper' => array(
						'width' => 50,
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'Post Title' => 'Post Title',
					),
					'other_choice' => 1,
					'save_other_choice' => 0,
					'default_value' => 'Add Custom Title Here',
					'layout' => 'vertical',
					'allow_null' => 0,
				),
				array(
					'key' => 'field_568311abdbeb9',
					'label' => 'Content Box Title',
					'name' => 'mtm_home_featured_box_manual_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_56830c0e85f0f',
								'operator' => '==',
								'value' => 'Manual Entry',
							),
						),
					),
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
					'key' => 'field_56830cc085f10',
					'label' => 'Specific Content',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_56830c0e85f0f',
								'operator' => '==',
								'value' => 'Specific Content',
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
				),
				array(
					'key' => 'field_5683104bf206d',
					'label' => 'Select Specific Content',
					'name' => 'mtm_home_featured_select_single',
					'type' => 'post_object',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array(
					),
					'taxonomy' => array(
					),
					'allow_null' => 0,
					'multiple' => 0,
					'return_format' => 'object',
					'ui' => 1,
				),
				array(
					'key' => 'field_56830cfe85f11',
					'label' => 'Show Latest Post',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_56830c0e85f0f',
								'operator' => '==',
								'value' => 'Show Latest Post',
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
				),
				array(
					'key' => 'field_56830e9a12151',
					'label' => 'Select Post Taxonomy',
					'name' => 'mtm_home_featured_archive_taxonomy',
					'type' => 'taxonomy-chooser',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_56830c0e85f0f',
								'operator' => '==',
								'value' => 'Show Latest Post',
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
				),
				array(
					'key' => 'field_56830d0d85f12',
					'label' => 'Manual Content Entry',
					'name' => 'manual_content_entry',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_56830c0e85f0f',
								'operator' => '==',
								'value' => 'Manual Entry',
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
				),
				array(
					'key' => 'field_568311f6dbeba',
					'label' => 'Featured Image',
					'name' => 'mtm_home_featured_image_manual',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_56830c0e85f0f',
								'operator' => '==',
								'value' => 'Manual Entry',
							),
						),
					),
					'wrapper' => array(
						'width' => 40,
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5683123edbebb',
					'label' => 'Box Content',
					'name' => 'mtm_home_featured_content_manual',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_56830c0e85f0f',
								'operator' => '==',
								'value' => 'Manual Entry',
							),
						),
					),
					'wrapper' => array(
						'width' => 60,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'basic',
					'media_upload' => 0,
				),
				array(
					'key' => 'field_5683127cdbebc',
					'label' => 'Content Link',
					'name' => 'mtm_home_featured_content_link_manual',
					'type' => 'page_link',
					'instructions' => 'Link to a custom page or post on your site',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_56830c0e85f0f',
								'operator' => '==',
								'value' => 'Manual Entry',
							),
						),
					),
					'wrapper' => array(
						'width' => 50,
						'class' => '',
						'id' => '',
					),
					'post_type' => array(
					),
					'taxonomy' => array(
					),
					'allow_null' => 0,
					'multiple' => 0,
				),
				array(
					'key' => 'field_56a7cbed3e0cd',
					'label' => 'Custom Link',
					'name' => 'mtm_home_featured_content_link_custom',
					'type' => 'text',
					'instructions' => 'If you don\'t wish to link to a page or post on your site, type your custom link here. Overrides content link.',
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

	// news page title
	public function mtm_news_show_page_title( $label = 'Show Page Title?', $key = 'field_5769732b36198' ) {
		return apply_filters('mtm_news_show_page_title_filter', array(
			'key' => $key,
			'label' => $label,
			'name' => 'mtm_news_show_page_title',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Yes, I\'d like to show the page title at the top of the page (leaving unchecked will hide the page title)',
			'default_value' => 0,
		));
	}

	// news page widget area
	public function mtm_enable_news_widgets( $label = 'Enable Widget Area?', $key = 'field_57697520880c4' ) {
		return apply_filters( 'mtm_enable_news_widgets_filter', array(
			'key' => $key,
			'label' => $label,
			'name' => 'mtm_enable_news_widgets',
			'type' => 'true_false',
			'instructions' => 'Create a "news page" widget area and display those widgets on your news page',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
		));
	}

	// news page all featured story fields
	public function mtm_featured_story_source( $label = 'Select Featured Story Source', $key = 'field_5769732b361c8' ){
		return apply_filters( 'mtm_featured_story_source_filter', array(
			'key' => $key,
			'label' => $label,
			'name' => 'mtm_home_select_featured_story_source',
			'type' => 'select',
			'instructions' => 'Select the source for your featured story, which will display at the top of the page',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Latest Post' => 'Latest Post',
				'Latest Post From Taxonomy' => 'Latest Post From Taxonomy',
				'Specific Post' => 'Specific Post',
				'No Featured Story' => 'No Featured Story',
			),
			'default_value' => array(
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		));
	}

	public function mtm_featured_story_type( $label = 'Which Post Type?', $key = 'field_5769732b361c8' ){
		return apply_filters( 'mtm_featured_story_type_filter', array(
			'key' => 'field_5769732b361e3',
			'label' => $label,
			'name' => 'mtm_home_select_featured_story_type',
			'type' => 'post_type_selector',
			'instructions' => 'Choose which post type will be the source for your featured story.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $key,
						'operator' => '==',
						'value' => 'Latest Post',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'fields[mtm_home_select_featured_story_type' => array(
				'select_type' => 1,
			),
			'select_type' => 0,
		));
	}

	public function mtm_featured_story_archive_taxonomy( $label = 'Featured Story Topic', $key = 'field_5769732b361c8' ){
		return apply_filters( 'mtm_featured_story_archive_taxonomy_filter', array(
			'key' => 'field_5769732b36208',
			'label' => $label,
			'name' => 'mtm_home_featured_story_archive_taxonomy',
			'type' => 'taxonomy-chooser',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $key,
						'operator' => '==',
						'value' => 'Latest Post From Taxonomy',
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

	public function mtm_featured_story_select_single( $label = 'Featured Story Specific Post', $key = 'field_5769732b361c8' ){
	return apply_filters( 'mtm_featured_story_select_single_filter', array(
			'key' => 'field_5769732b3623a',
			'label' => $label,
			'name' => 'mtm_home_featured_story_select_single',
			'type' => 'post_object',
			'instructions' => 'Select which post will be featured on the landing page. This will remain until you change it.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => $key,
						'operator' => '==',
						'value' => 'Specific Post',
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
			'allow_null' => 0,
			'multiple' => 0,
			'return_format' => 'object',
			'ui' => 1,
		));
	}

	public function mtm_topic_sections( $label = 'Add Topic Sections', $key = 'field_5769732b36256' ){
		return apply_filters( 'mtm_topic_sections_filter', array(
			'key' => $key,
			'label' => $label,
			'name' => 'mtm_home_topic_sections',
			'type' => 'repeater',
			'instructions' => 'Optional: Add and reorder topic sections which will display on the page, below your featured story',
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
			'button_label' => 'Add Topic',
			'sub_fields' => array(
				array(
					'key' => 'field_5769732b97c99',
					'label' => 'Topics',
					'name' => 'mtm_home_topic_archive_taxonomy',
					'type' => 'taxonomy-chooser',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
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
				),
			),
		));
	}

	public function mtm_stories_per_topic( $label = 'How Many Stories Per Topic?', $key = 'field_5769732b36256' ){
		return apply_filters( 'mtm_stories_per_topic_filter', array(
			'key' => 'field_5769732b3627b',
			'label' => $label,
			'name' => 'mtm_home_stories_per_topic',
			'type' => 'number',
			'instructions' => 'How many stories to list in each topic, including the main story?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => 50,
				'class' => '',
				'id' => '',
			),
			'default_value' => 4,
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
	
	public function mtm_topic_grid_archive_per_row( $label = 'Number of items per row', $key = 'field_5769732b36256' ){
		return apply_filters( 'mtm_topic_grid_archive_per_row_filter', array(
			'key' => 'field_576c1c328d7d3',
			'label' => $label,
			'name' => 'mtm_grid_archive_per_row',
			'type' => 'number',
			'instructions' => 'How many topic sections would you like to display in each row?',
			'required' => 0,
			'conditional_logic' => 0,
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

	// contributors tab
	public function mtm_contributors_container( $label = 'Contributors', $value = 'Contributors', $key = null ){
		
		if( is_null( $key ) ) { $key = self::$str_key_parent; } 

		return apply_filters( 'mtm_contributors_container_filter', array(
			'key' => 'field_5b1feb59bc284',
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

	public function mtm_contributors( $label = 'Add Contributors', $value = 'Contributors', $key = null ){
		
		if( is_null( $key ) ) { $key = self::$str_key_parent; } 

		return apply_filters( 'mtm_contributors_filter', array(
			'key' => 'field_5b1feb74bc285',
			'label' => 'Select Contributors',
			'name' => 'mtm_user_picker',
			'type' => 'user',
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
			'role' => '',
			'allow_null' => 0,
			'multiple' => 1,
		));
	}

	// public function mtm( $label = '' ){
	// 	return apply_filters( '', array(

	// 	));
	// }
}