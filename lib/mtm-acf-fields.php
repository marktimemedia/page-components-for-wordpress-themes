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

/** Landing Page **/

acf_add_local_field_group( array(
	'key' => 'group_565cdb18b4c4c',
	'title' => 'Landing Page Content Options',
	'fields' => array(
		array(
			'key' => 'field_565e2f81c08ca',
			'label' => 'Enable Single Scroll Page?',
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
		),
		array(
			'key' => 'field_56bcbd4fab425',
			'label' => 'Standard Landing Page Options',
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
		),
		array(
			'key' => 'field_565cdb25b1d30',
			'label' => 'Add Buttons',
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
		),
		array(
			'key' => 'field_568314207680d',
			'label' => 'Enable Featured Content Boxes?',
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
		),
		array(
			'key' => 'field_576c1c0c9ba43',
			'label' => 'Number of feature boxes per row',
			'name' => 'mtm_grid_archive_per_row',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_568314207680d',
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
		),
		array(
			'key' => 'field_56830bcd85f0e',
			'label' => 'Add Featured Content Boxes',
			'name' => 'mtm_home_featured_content_boxes',
			'type' => 'repeater',
			'instructions' => '(Optional) Add featured content boxes to the homepage',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_568314207680d',
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
		),
		array(
			'key' => 'field_56bcbdcb85f77',
			'label' => 'Single Scroll Page Options',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_565e2f81c08ca',
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
		),
		array(
			'key' => 'field_565e2fa2c08cb',
			'label' => 'Select Pages',
			'name' => 'mtm_select_pages',
			'type' => 'relationship',
			'instructions' => 'Select and re-order page content which will display in sections on your landing page, below the main content. To make sure special features are enabled, make sure your selected pages are using the Page Components template.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_565e2f81c08ca',
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
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

/** News Page **/

acf_add_local_field_group( array(
	'key' => 'group_5769732b2454d',
	'title' => 'News Page Content Options',
	'fields' => array(
		array(
			'key' => 'field_5769732b360ca',
			'label' => 'Enable Single Scroll Page?',
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
		),
		array(
			'key' => 'field_5769732b36172',
			'label' => 'News Landing Page Options',
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
		),
		array(
			'key' => 'field_5769732b36198',
			'label' => 'Show Page Title?',
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
		),
		array(
			'key' => 'field_5769732b361c8',
			'label' => 'Select Featured Story Source',
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
		),
		array(
			'key' => 'field_5769732b361e3',
			'label' => 'Which Post Type?',
			'name' => 'mtm_home_select_featured_story_type',
			'type' => 'post_type_selector',
			'instructions' => 'Choose which post type will be the source for your featured story.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5769732b361c8',
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
		),
		array(
			'key' => 'field_5769732b36208',
			'label' => 'Featured Story Topic',
			'name' => 'mtm_home_featured_story_archive_taxonomy',
			'type' => 'taxonomy-chooser',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5769732b361c8',
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
		),
		array(
			'key' => 'field_5769732b3623a',
			'label' => 'Featured Story Specific Post',
			'name' => 'mtm_home_featured_story_select_single',
			'type' => 'post_object',
			'instructions' => 'Select which post will be featured on the landing page. This will remain until you change it.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5769732b361c8',
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
		),
		array(
			'key' => 'field_57697520880c4',
			'label' => 'Enable Widget Area?',
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
		),
		array(
			'key' => 'field_5769732b36256',
			'label' => 'Add Topic Sections',
			'name' => 'mtm_home_topic_sections',
			'type' => 'repeater',
			'instructions' => 'Optional: Add and reorder topic sections which will display on the landing page, below your featured story',
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
		),
		array(
			'key' => 'field_5769732b3627b',
			'label' => 'How Many Stories Per Topic?',
			'name' => 'mtm_home_stories_per_topic',
			'type' => 'number',
			'instructions' => 'How many stories to list in each topic, including the main story?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
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
		),
		array(
			'key' => 'field_576c1c328d7d3',
			'label' => 'Number of items per row',
			'name' => 'mtm_grid_archive_per_row',
			'type' => 'number',
			'instructions' => 'How many topic sections would you like to display in each row?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
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
		),
		array(
			'key' => 'field_5769732b362dc',
			'label' => 'Single Scroll Page Options',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5769732b360ca',
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
		),
		array(
			'key' => 'field_5769732b36303',
			'label' => 'Select Pages',
			'name' => 'mtm_select_pages',
			'type' => 'relationship',
			'instructions' => 'Select and re-order page content which will display in sections on your landing page, below the main content. To make sure special features are enabled, make sure your selected pages are using the Page Components template.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5769732b360ca',
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
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'component',
				'operator' => '==',
				'value' => '../templates/template-news.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

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