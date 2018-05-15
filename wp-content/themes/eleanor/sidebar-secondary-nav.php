<?php
/**
 * Secondary navigation (left nav)
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eleanor
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="sidebar-nav" class="sidebar">
	<?php wp_nav_menu( array(
		'theme-location'	=> 'menu-2',
		'menu_class'	=> 'nav',
	));
	?>

</aside><!-- #sidebar-nav -->
