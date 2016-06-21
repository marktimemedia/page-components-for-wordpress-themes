<?php

// Add ability to display using plugin templates
// From http://www.advancedcustomfields.com/resources/custom-location-rules/

add_filter('acf/location/rule_types', 'acf_location_rules_types');
function acf_location_rules_types( $choices )
{
    $choices['Page']['component'] = 'Component Templates';

    return $choices;
}

add_filter('acf/location/rule_values/component', 'acf_location_rules_values_component');
function acf_location_rules_values_component( $choices )
{
	$choices = array();
	
	$templates = array(
                        'Components Page' => '../templates/template-components.php',
                        'Landing Page' => '../templates/template-home.php',
                        'News Page'		=> '../templates/template-news.php',
                        'Modular Content' => '../templates/template-modules.php',
                    );
	
	foreach( $templates as $k => $v ) {
	
		$choices[ $v ] = $k;
		
	}

    return $choices;
}

add_filter('acf/location/rule_match/component', 'acf_location_rules_match_component', 10, 3);
function acf_location_rules_match_component( $match, $rule, $options )
{
    // vars
		$page_template = $options['page_template'];
		
		
		// get page template
		if( !$page_template && $options['post_id'] ) {
		
			$page_template = get_post_meta( $options['post_id'], '_wp_page_template', true );
			
		}
		
		
		// get page template again
		if( ! $page_template ) {
			
			$post_type = $options['post_type'];

			if( !$post_type && $options['post_id'] ) {
			
				$post_type = get_post_type( $options['post_id'] );
				
			}
			
			if( $post_type === 'page' ) {
			
				$page_template = "default";
				
			}
		}
		
		
		// compare
        if( $rule['operator'] == "==" ) {
        
        	$match = ( $page_template === $rule['value'] );
        
        } elseif( $rule['operator'] == "!=" ) {
        	
        	$match = ( $page_template !== $rule['value'] );
        	
        }
        
        
        // return
        return $match;

}