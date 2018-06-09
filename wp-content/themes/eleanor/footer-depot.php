<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Eleanor
*/

?>

<footer id="colophon" class="site-footer depot-home-footer bg-dark">
	<div class="container">
		<div class="row">
					<?php
					dynamic_sidebar('depot-footer-1');
					dynamic_sidebar('depot-footer-2'); ?>
		</div>
		<div class="row">
			<!-- =======================
			Copyright
			======================== -->
			<div class="site-info col-md">
				&copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( __( 'https://wysac.uwyo.edu', 'eleanor' ) ); ?>"> Wyoming Survey & Analysis Center at the University of Wyoming</a>
			</div><!-- .site-info -->
			<!-- =======================
			Footer Nav !! Dyanmic Menu !!
			======================== -->
			<div class="col-md mr-auto">
				<?php wp_nav_menu(array (
					'menu' => 'Footer Navigation',
					'menu_class' => 'nav justify-content-end',
					'theme_location' => 'menu-3',
				)); ?>
			</div>
		</div>
	</div><!--.container-->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
