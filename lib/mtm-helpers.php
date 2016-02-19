<?php

// Get Template Part function used within this plugin & templates
function mtm_get_template_part( $slug, $name = null ) {

    $templates = new Mtm_Template_Loader;

    $templates->get_template_part( $slug, $name );
}

// Post Type Query
function mtm_page_component_post_query( $posttype = 'post', $perpage = 1, $orderby = 'date', $order = 'DESC', $notin = 'sticky_posts' ) {
    return new WP_Query( array(
        'post_type'         => array( $posttype ),
        'posts_per_page'    => $perpage,
        'orderby'           => $orderby,
        'order'             => $order,
        'post__not_in'      => get_option( $notin )
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
function mtm_taxonomy_query( $archivetype, $display = 1 ) {

    $taxonomy = mtm_acf_taxonomy_property( $archivetype, 'taxonomy' );
    $terms = mtm_acf_taxonomy_property( $archivetype, 'name' );
    
    if( get_field( 'mtm_' . $archivetype . '_archive_taxonomy_number' ) ) {
        $display = get_field( 'mtm_' . $archivetype . '_archive_taxonomy_number' );
    }

    return mtm_page_component_taxonomy_query( $taxonomy, $terms, $display );
}

// Taxonomy Query for Sub Field
function mtm_taxonomy_query_sub( $archivetype, $display, $order = 'ASC', $orderby = 'date' ) {
    $taxonomy = mtm_acf_taxonomy_sub_property( $archivetype, 'taxonomy' );
    $terms = mtm_acf_taxonomy_sub_property( $archivetype, 'name' );

    return mtm_page_component_taxonomy_query( $taxonomy, $terms, $display, $orderby, $order );
}

// Term Links From Defined Taxonomy
function mtm_terms_from_taxonomy_links( $tax = '' ){

    $terms = get_terms( $tax );

    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
        $count = count( $terms );
        $i = 0;
        $term_list = '<ul class="mtm-component--term-list"><li><a href="';
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
  