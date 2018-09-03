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
	public static $str_label2 = 'Additional Page Options';

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

	public static $arr_location2 = array(
		array(
			'param' => 'component',
			'operator' => '==',
			'value' => '../templates/template-home.php',
		),
	);

	public static $arr_location3 = array(
		array(
			'param' => 'component',
			'operator' => '==',
			'value' => '../templates/template-news.php',
		),
	);

	/**
	* Unique Key
	*/
	public static $str_key = 'group_565cb5e35a2af';
	public static $str_key2 = 'group_565cdb18b4c4c';
	public static $str_key3 = 'group_5769732b2454d';


	public function __construct() {

		add_action( 'init', array( $this, 'mtm_field_components' ) );
		add_action( 'init', array( $this, 'mtm_field_group_landing_page' ) );
		add_action( 'init', array( $this, 'mtm_field_group_news_page' ) );
	}

	/**
	* Component Fields for Pages
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
				'mtm_list_archive_taxonomy_number' => $this->mtm_list_archive_taxonomy_number(),
				'mtm_show_view_all_link' => $this->mtm_show_view_all_link(),
				'mtm_list_archive_manual' => $this->mtm_list_archive_manual(),
				'mtm_grid_archive_container' => $this->mtm_grid_archive_container(),
				'mtm_grid_archive_select' => $this->mtm_grid_archive_select(),
				'mtm_grid_archive_taxonomy' => $this->mtm_grid_archive_taxonomy(),
				'mtm_grid_archive_taxonomy_number' => $this->mtm_grid_archive_taxonomy_number(),
				'mtm_show_view_all_link_2' => $this->mtm_show_view_all_link_2(),
				'mtm_grid_archive_manual' => $this->mtm_grid_archive_manual(),
				'mtm_tabs_container' => $this->mtm_tabs_container(),
				'mtm_tab_repeater' => $this->mtm_tab_repeater(),
				'mtm_taxonomy_list_container' => $this->mtm_taxonomy_list_container(),
				'mtm_show_taxonomy_links' => $this->mtm_show_taxonomy_links(),
				'mtm_manual_archive_taxonomy' => $this->mtm_manual_archive_taxonomy(),
				'mtm_cta_container' => $this->mtm_cta_container(),
				'mtm_cta_button_repeater' => $this->mtm_cta_button_repeater(),
				'mtm_extra_content_container' => $this->mtm_extra_content_container(),
				'mtm_extra_content_area' => $this->mtm_extra_content_area(),
				'mtm_contributors_container' => $this->mtm_contributors_container(),
				'mtm_contributors' => $this->mtm_contributors(),
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

	/**
	* Standard Home/Landing Page Fields
	*/
	public function mtm_field_group_landing_page( $label = null, array $location = null, $key = null ) {

		if( is_null( $label ) ) { $label = self::$str_label2; }
		if( is_null( $location ) ) { $location = self::$arr_location2; }
		if( is_null( $key ) ) { $key = self::$str_key2; }

		return apply_filters( 'mtm_field_group_landing_page_filter', array(
			'key' => $key,
			'title' => $label,
			'fields' => apply_filters( 'mtm_field_group_landing_page_fields_filter', array(
					'mtm_enable_single_scroll_page' => $this->mtm_enable_single_scroll_page(),
					'mtm_page_options_tab' => $this->mtm_page_options_tab(),
					'mtm_home_buttons_repeater' => $this->mtm_home_buttons_repeater(),
					'mtm_enable_featured_content' => $this->mtm_enable_featured_content(),
					'mtm_feature_boxes_per_row' => $this->mtm_home_feature_boxes_per_row(),
					'mtm_home_feature_boxes' => $this->mtm_home_feature_boxes(),
					'mtm_single_scroll_options_tab' => $this->mtm_single_scroll_options_tab(),
					'mtm_single_scroll_page_select' => $this->mtm_single_scroll_page_select(),
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

	/**
	* News Page Fields
	*/
	public function mtm_field_group_news_page( $label = null, array $location = null, $key = null ) {

		if( is_null( $label ) ) { $label = self::$str_label2; }
		if( is_null( $location ) ) { $location = self::$arr_location3; }
		if( is_null( $key ) ) { $key = self::$str_key3; }

		return apply_filters( 'mtm_field_group_news_page_filter', array(
			'key' => $key,
			'title' => $label,
			'fields' => apply_filters( 'mtm_field_group_news_page_fields_filter', array(
					'mtm_enable_single_scroll_page' => $this->mtm_enable_single_scroll_page(),
					'mtm_page_options_tab' => $this->mtm_page_options_tab(),
					'mtm_news_show_page_title' => $this->mtm_news_show_page_title(),
					'mtm_enable_news_widgets' => $this->mtm_enable_news_widgets(),
					'mtm_featured_story_source' => $this->mtm_featured_story_source(),
					'mtm_featured_story_type' => $this->mtm_featured_story_type(),
					'mtm_featured_story_archive_taxonomy' => $this->mtm_featured_story_archive_taxonomy(),
					'mtm_featured_story_select_single' => $this->mtm_featured_story_select_single(),
					'mtm_topic_sections' => $this->mtm_topic_sections(),
					'mtm_stories_per_topic' => $this->mtm_stories_per_topic(),
					'mtm_topic_grid_archive_per_row' => $this->mtm_topic_grid_archive_per_row(),
					'mtm_single_scroll_options_tab' => $this->mtm_single_scroll_options_tab(),
					'mtm_single_scroll_page_select' => $this->mtm_single_scroll_page_select(),
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