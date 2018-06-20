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
</div><!--.row-->

	<footer id="colophon" class="site-footer app-footer">
		<!-- =======================
					Copyright
					======================== -->
		<div class="site-info">
			&copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( __( 'https://wysac.uwyo.edu', 'eleanor' ) ); ?>"> Wyoming Survey & Analysis Center at the University of Wyoming</a>
		</div><!-- .site-info -->
		<!-- =======================
					Footer Nav !! Dyanmic Menu !!
					======================== -->
		<div class="col mr-auto">
			<?php wp_nav_menu(array (
				'menu' => 'Footer Navigation',
				'menu_class' => 'nav justify-content-end',
				'theme_location' => 'menu-3',
			)); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
