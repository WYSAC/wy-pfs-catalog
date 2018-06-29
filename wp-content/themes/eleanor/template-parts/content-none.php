<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eleanor
 */

?>

<section class="no-results not-found row">
	<header class="page-header col-12">
		<h1 class="page-title"><?php esc_html_e( 'Oops...', 'eleanor' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content col-12">
		<?php
		if ( is_search() ) : ?>

			<p><?php esc_html_e( 'It looks like we couldn&rsquo;t find anything that matched your search. Try using different keywords', 'eleanor' ); ?></p>
			<?php
				get_search_form();

		elseif ( is_tax() ) : ?>

			<p><?php esc_html_e( 'It looks like no strategies are available for that parameter.  Try looking for another.', 'eleanor' ); ?></p>
			<?php
				get_search_form();
			else: ?>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'eleanor' ); ?></p>
<?php
		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
