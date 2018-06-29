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

<body <?php body_class('app header-fixed footer-fixed sidebar-show'); ?>>
	<div id="page" class="site ">
		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'eleanor' ); ?></a>
		<!-- =======================
		Header
		======================== -->
		<header id="masthead" class="">
			<!-- =======================
			Top Menu Navigation
			======================== -->
			<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom">
				<!-- =======================
				Branding & Logo
				======================== -->
				<a href="#" class="navbar-brand brand-logo" title="Wyoming Prevention Depot"><?php inline_svg('depot-logo');?> </a><a class="navbar-brand" href="#" >Wyoming Prevention Depot</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#depotNavBar" aria-controls="depotNavBar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- =======================
				Depot Nav !! Dynamic Menu !!
				======================== -->
				<div class="collapse navbar-collapse justify-content-end" id="depotNavBar">
					<?php wp_nav_menu(array(
						'theme_location' => 'menu-4',
						'walker'         => new Bootstrap_NavWalker(),
						'menu_class' => 'navbar-nav mr-auto'
					))?>
				</div>
			</nav>
		</header><!-- #masthead -->
		<!-- =======================
		JumboTron / Tool Name
		======================== -->
		<div class="jumbotron jumbotron-fluid bg-blue jumbotron-tool-name">
			<div class="container">
				<h1 class="display-4 text-center depot-tool-name"><a href="<?php echo site_url(); ?>"> <?php bloginfo('name'); ?></a></h1>
				<p class="lead text-center font-weight-bold text-white"><?php bloginfo('description');?></p>
				<!-- =======================
				Tool Nav !! Dynamic Menu !!
				======================== -->
				<div class="top-menu-nav d-flex justify-content-center">
					<?php wp_nav_menu(array (
						'theme_location' => 'menu-1',
						'menu_id'				=> 'primary-menu',
						'menu_class'		=> 'nav nav-pills',
						'walker'         => new Bootstrap_NavWalker(),
					)) ?>
				</div>
			</div>
		</div><!--.jumbotron-->
		<div id="content" class="site-content app-body container">
			<div class="row">
