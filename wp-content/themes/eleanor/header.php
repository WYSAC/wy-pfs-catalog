<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Eleanor
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('app footer-fixed'); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eleanor' ); ?></a>

		<header id="masthead" class="app-header">

			<nav class="navbar navbar-expand-lg navbar-light bg-light ">
				<!--Branding Name for Tiny Screens-->
				<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" class="navbar-brand d-inline d-md-none d-lg-done d-xl-none">WYPFSABC</a>
				<!--Branding Name for Regular -> XL Screens-->
				<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" class="navbar-brand d-none d-md-inline d-lg-inline d-xl-inline"><?php bloginfo('name'); ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'eleanor' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbar-content">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'depth'          => 2,
						'menu_class'     => 'navbar-nav mr-auto',
						'walker'         => new Bootstrap_NavWalker(),
						'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
					) );
					?>
				</div>
			</nav>
		</header><!-- #masthead -->

		<div id="content" class="site-content container app-body">
						<div class="row">
