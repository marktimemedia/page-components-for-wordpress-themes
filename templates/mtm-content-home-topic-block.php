<?php
$taxurl = mtm_acf_taxonomy_sub_property( 'home_topic', 'taxonomy' );
$termurl = mtm_acf_taxonomy_sub_property( 'home_topic', 'slug' );
$pathurl = $taxurl . '/' . $termurl;
?>

<h3 class="mtm-home-topic--label <?php echo esc_html( $termurl ); ?>"><a href="<?php echo esc_url( home_url( $pathurl ) ) ?>"><?php echo esc_html( mtm_acf_taxonomy_sub_property( 'home_topic', 'name' ) ) ?></a></h3>

<?php the_mtm_post_thumbnail( 'medium_large', 'mtm-home-topic--image' ); ?>

<h4 class="mtm-home-topic--primary"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>