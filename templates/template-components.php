<?php
/*
Template Name: Page Components
*/
?>

<?php mtm_load_wrap_header(); ?>

<section id="<?php echo $post->post_name; ?>" class="content--page content--<?php echo $post->post_name; ?>">

	<?php mtm_get_template_part('mtm-logic', 'components'); ?>

</section>

<?php mtm_load_wrap_footer(); ?>
