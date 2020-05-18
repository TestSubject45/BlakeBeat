<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>
<main id="content">
<!-- Display Nav -->
<?php get_template_part( 'nav', 'below' ); ?>
<!-- get page title -->
<?php echo get_the_title($post->ID); ?>
<!-- Get page content -->
<?php echo get_post_field('post_content', $post->ID); ?>
</main>
<?php get_footer(); ?>
