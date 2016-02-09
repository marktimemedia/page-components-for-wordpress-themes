<?php // Standard Page Content ?>

<?php if ( has_post_thumbnail() ): ?>
    <figure class="post--thumbnail"><?php the_post_thumbnail( 'full' ) ?></figure>
<?php endif;
// the_content();
 // Something is filtering the_content, figure out what that is so I can change this

$home_post = get_post( get_the_ID() );
echo apply_filters( 'the_content', $home_post->post_content );
?>
