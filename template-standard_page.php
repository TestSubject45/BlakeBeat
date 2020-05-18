<?php /* Template Name: Standard Page */ ?>

<?php get_header(); ?>
<!-- Display Nav -->
<?php get_template_part( 'nav', 'below' ); ?>
<main id="content">
<!-- Get page content -->
<div id="content-area">
	<?php the_content(); ?>
</div>
</main>
<?php get_footer(); ?>
