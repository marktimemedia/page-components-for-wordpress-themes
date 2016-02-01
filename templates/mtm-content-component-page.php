<?php // Standard Page Content ?>

<h1><?php the_title(); ?><?php edit_post_link( '(Edit)', ' • ' ); ?></h1>
<?php // the_content(); ?>

<?php // Something is filtering the_content, figure out what that is so I can change this

$home_post = get_post( get_the_ID() );
echo apply_filters( 'the_content', $home_post->post_content );
?>
