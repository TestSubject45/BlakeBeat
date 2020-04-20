<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>
<main id="content">
<!-- Display Nav -->
<?php get_template_part( 'nav', 'below' ); ?>
<!-- Get page content -->
<?php if ( have_posts() ) :
	// Start the Loop.
	while ( have_posts() ) : the_post(); ?>
        <div>
            <div id="content-area">
				<?php the_content(); ?>
            </div>
        </div>
<?php endwhile;endif; ?>  
</main>
<?php get_footer(); ?>
