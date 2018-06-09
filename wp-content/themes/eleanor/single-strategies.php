<?php
/**
 * The template for displaying all single, Strategy posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Eleanor
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main main">


		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single-strategy' );

			the_post_navigation();


		endwhile; // End of the loop.
		?>


</main><!--#main.main-->
</div><!--#primary-->

<?php
get_sidebar(); //Dynamic sidebar with secondary nav menu
get_sidebar('strategy');
get_footer();

?>
