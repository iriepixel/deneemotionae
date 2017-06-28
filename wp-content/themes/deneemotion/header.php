<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Deneemotion UAE
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/deneemotion/favicon.ico" />
<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6_d4hLSBMwuw5iNgQoWEpBsrdVOG0Gfk"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="loader"></div>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'deneemotion' ); ?></a>

	<div class="menu-button">
		<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/deneemotion/images/menu-transp.png" alt="Menu Button">
	</div>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img alt="logo" title="logo" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/deneemotion/images/logo-white.png" srcset="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/deneemotion/images/logo-white.png"></a>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
