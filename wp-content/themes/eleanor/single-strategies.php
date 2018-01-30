<?php
/**
 * The template for displaying all single, Strategies posts.
 *
 * @package eleanor
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main col-md-8" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single-strategy' ); ?>


				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		<?php get_sidebar('strategy'); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
