<?php
/**
 * Template part for displaying results in search pages
 * SEARCH PAGES ONLY SEARCH STRATEGIES POST TYPE!!
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eleanor
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<div class="entry-meta">

		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->


	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php eleanor_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
