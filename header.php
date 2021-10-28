<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<!--Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cousine:ital,wght@0,400;0,700;1,400;1,700&family=Inconsolata:wght@400;700&family=Oxygen+Mono&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Coda:wght@400;800&display=swap" rel="stylesheet">
<!--End Google Fonts -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
<div id="site-title">
<?php echo '<h1>'; ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php echo '</h1>'; ?>
</div>
<nav id="menu" role="navigation">
	<div id="wrap">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</div>
</nav>
</header>
<div id="container">
