<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Eleanor
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main main">

			<section class="error-404 not-found row align-items-center">
				<div class="col col-md-6">
					<img src="https://media.giphy.com/media/BEYRc8P1IaiaY/giphy.gif" title="404: Page Not Found" />
				</div>
				<div class="col col-md-6">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'eleanor' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try searching for what you need.', 'eleanor' ); ?></p>

					<?php
						get_search_form();
					?>

				</div><!-- .page-content -->
			</div>
			</section><!-- .error-404 -->

</main><!--#main.main-->
</div><!--#primary-->

<?php
get_footer();
