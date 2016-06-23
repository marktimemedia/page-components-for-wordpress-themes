<?php

// Get Template Part function used within this plugin & templates
function mtm_get_template_part( $slug, $name = null ) {

    $templates = new Mtm_Template_Loader;

    $templates->get_template_part( $slug, $name );
}

// Post Type Query
function mtm_page_component_post_query( $posttype = 'post', $perpage = 3, $orderby = 'date', $order = 'DESC', $notin = 'sticky_posts' ) {
    return new WP_Query( array(
        'post_type'         => array( $posttype ),
        'posts_per_page'    => $perpage,
        'orderby'           => $orderby,
        'order'             => $order,
        'post__not_in'      => get_option( $notin ),
        )
    );
}

// Post Type Query Paged
function mtm_page_component_post_query_paged( $posttype = 'post', $perpage = 3, $orderby = 'date', $order = 'DESC', $notin = 'sticky_posts' ) {
    return new WP_Query( array(
        'post_type'         => array( $posttype ),
        'posts_per_page'    => $perpage,
        'orderby'           => $orderby,
        'order'             => $order,
        'post__not_in'      => get_option( $notin ),
        'paged'             => get_query_var( 'paged' ),
        )
    );
}


// Taxonomy Query
function mtm_page_component_taxonomy_query( $taxonomy, $terms, $perpage = 3, $orderby = 'date', $order = 'DESC' ) {
    return new WP_Query( array(
        'posts_per_page'    => $perpage,
        'orderby'           => $orderby,
        'order'             => $order,
        'tax_query'         => array(
            array(
                'taxonomy'  => $taxonomy,
                'field'     => 'slug',
                'terms'     => $terms,
                ),
            ),
        )
    );
}

// get taxonomy properties from Tax Term ID Field (when term is selected)
function mtm_acf_taxonomy_property( $archivetype, $property ){
    $taxid = get_field( 'mtm_' . $archivetype . '_archive_taxonomy' );
    $taxterm = get_term( $taxid );
    return $taxterm->$property;
}

// get taxonomy properties from Tax ID Sub-Field (when term is selected)
function mtm_acf_taxonomy_sub_property( $archivetype, $property ){
    $taxid = get_sub_field( 'mtm_' . $archivetype . '_archive_taxonomy' );
    $taxterm = get_term( $taxid );
    return $taxterm->$property;
}

// Taxonomy Query for Archive Field
function mtm_taxonomy_query( $archivetype, $display = 3 ) {

    $taxonomy = mtm_acf_taxonomy_property( $archivetype, 'taxonomy' );
    $terms = mtm_acf_taxonomy_property( $archivetype, 'name' );
    
    if( get_field( 'mtm_' . $archivetype . '_archive_taxonomy_number' ) ) {
        $display = get_field( 'mtm_' . $archivetype . '_archive_taxonomy_number' );
    }

    return mtm_page_component_taxonomy_query( $taxonomy, $terms, $display );
}

// Taxonomy Query for Sub Field
function mtm_taxonomy_query_sub( $archivetype, $display = 3, $order = 'ASC', $orderby = 'date' ) {
    $taxonomy = mtm_acf_taxonomy_sub_property( $archivetype, 'taxonomy' );
    $terms = mtm_acf_taxonomy_sub_property( $archivetype, 'name' );

    if( get_sub_field( 'mtm_' . $archivetype . '_archive_taxonomy_number' ) ) {
        $display = get_sub_field( 'mtm_' . $archivetype . '_archive_taxonomy_number' );
    }

    return mtm_page_component_taxonomy_query( $taxonomy, $terms, $display, $orderby, $order );
}

// Term Links From Defined Taxonomy
function mtm_terms_from_taxonomy_links( $tax = '' ){

    $terms = get_terms( $tax );

    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
        $count = count( $terms );
        $i = 0;
        $term_list = '<ul class="mtm-component--term-list">';
        foreach ( $terms as $term ) {
            $i++;
            $term_list .= '<li><a href="' . get_term_link( $term ) . '" title="' . sprintf( __( 'View all filed under %s', 'my_localization_domain' ), $term->name ) . '" data-id="' . $term->term_id . '">' . $term->name . '</a></li>';
            if ( $count != $i ) {
                $term_list .= ' ';
            }
            else {
                $term_list .= '</ul>';
            }
        }
        echo $term_list;
    }
}

// Get Property from ACF Image Object
function mtm_acf_image_property( $field = '', $property = '' ) {

    if( _get_field( $field ) ) {
        $image = get_field( $field );
        
        return $image[ $property ];
    }
}

// Get Property from ACF Sub Image Object
function mtm_acf_sub_image_property( $field = '', $property = '' ) {

    if( get_sub_field( $field ) ) {
        $image = get_sub_field( $field );
        
        return $image[ $property ];
    }
}

/**
 * Count number of widgets in a sidebar
 * Used to add classes to widget areas so widgets can be displayed one, two, three or four per row
 * From https://gist.github.com/slobodan/6156076
 */
function slbd_count_widgets( $sidebar_id ) {
    // If loading from front page, consult $_wp_sidebars_widgets rather than options
    // to see if wp_convert_widget_settings() has made manipulations in memory.
    global $_wp_sidebars_widgets;
    if ( empty( $_wp_sidebars_widgets ) ) :
        $_wp_sidebars_widgets = get_option( 'sidebars_widgets', array() );
    endif;
    
    $sidebars_widgets_count = $_wp_sidebars_widgets;
    
    if ( isset( $sidebars_widgets_count[ $sidebar_id ] ) ) :
        $widget_count = count( $sidebars_widgets_count[ $sidebar_id ] );
        $widget_classes = 'widget-count-' . count( $sidebars_widgets_count[ $sidebar_id ] );
        if ( $widget_count % 4 == 0 || $widget_count > 6 ) :
            // Four widgets per row if there are exactly four or more than six
            $widget_classes .= ' mtm-per-row-4';
        elseif ( $widget_count >= 3 ) :
            // Three widgets per row if there's three or more widgets 
            $widget_classes .= ' mtm-per-row-3';
        elseif ( 2 == $widget_count ) :
            // Otherwise show two widgets per row
            $widget_classes .= ' mtm-per-row-2';
        endif; 
        return $widget_classes;
    endif;
}

function mtm_count_classes( $count = 1 ) {
    $item_count = $count;
    $item_classes = '';
    
        if( 6 == $item_count || $item_count >= 11 ) :
            // Six items per row if there's six or greater/equal to 10 items
            $item_classes = 'mtm-per-row-6';
        elseif ( 5 == $item_count || $item_count == 10 ) :
            // Three items per row if there's 5 or 8 items
            $item_classes = 'mtm-per-row-5';
        elseif ( 4 == $item_count || $item_count >= 7 && $item_count <= 8 ) :
            // Four items per row if there's 4, 7, or 8 items
            $item_classes = 'mtm-per-row-4';
        elseif ( 3 == $item_count || $item_count == 9 ) :
            // Three items per row if there's three or nine items
            $item_classes = 'mtm-per-row-3';
        elseif ( 2 == $item_count ) :
            // Otherwise show two widgets per row
            $item_classes = 'mtm-per-row-2';
        endif; 
        return $item_classes;
}

function mtm_output_row_number( $num = 3, $field = 'mtm_grid_archive_per_row' ) {
     if( get_field( $field ) ) {
        
        $num = get_field( $field );

     } elseif( get_sub_field( $field ) ) {

        $num = get_sub_field( $field );
     }

    return 'mtm-per-row-' . $num;
}
  