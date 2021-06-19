<?php
/**
 * The Header for vinyl
 *
 * @package vinyl
 * @since vinyl 1.0
 */
$slider_home_id = get_theme_mod( 'ht_slider_home_id' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">			

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<button class="menu-toggle"><?php _e( 'Menu', 'vinyl' ); ?></button>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'vinyl' ); ?></a>

		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav><!-- #site-navigation -->

	<div class="container">

		<header id="masthead" class="site-header" role="banner">


			
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>

			<?php if ( get_header_image() ) : ?>
			<div class="header-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt=""></a>
			</div>
			<?php endif; // End header image check. ?>

		</header><!-- #masthead -->
		
		<?php if ( get_theme_mod( 'ht_slider_option' ) == 'yes' ) : ?>
		
			<?php
			if ( is_home() ) {
				echo do_shortcode( '[metaslider id=' . $slider_home_id .']' );
			} ?>

		<?php endif; ?>

		<div id="content" class="site-content">
