<?php
/**
* The header for the depot page
*
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

<body <?php body_class(); ?>>
	<div id="page" class="site ">
		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'eleanor' ); ?></a>
		<!-- =======================
		Header
		======================== -->
		<header id="masthead" class="depot-home-header position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
			<div class="col-md-8 p-lg-5 mx-auto my-5">
				<a href="#" class="navbar-brand brand-logo depot-brand-logo" title="Wyoming Prevention Depot"><?php inline_svg('depot-logo');?> </a>
				<h1 class="display-1  text-white"><small class="font-weight-light">Wyoming</small><br/>Prevention Depot</h1>
				<p class="lead text-white">Here's a little description</p>
			</div>
		</header><!-- #masthead -->
		<div id="content" class="site-content">
