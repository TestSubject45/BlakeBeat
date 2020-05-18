<?php /* Template Name: Standard Page */ ?>

<?php get_header(); ?>
<!-- Display Nav -->
<?php get_template_part( 'nav', 'below' ); ?>
<main id="content">
<!-- Page Title -->
<h1 class="entry-title"><?php the_title(); ?></h1> 
<!-- Page Content -->
    <?php
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
            <?php the_content(); ?> <!-- Page Content -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
</main>
<?php get_footer(); ?>
