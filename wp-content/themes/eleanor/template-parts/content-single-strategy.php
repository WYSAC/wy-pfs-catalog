<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eleanor
 */

 /*  NOTES
 *   - The Favorites/Bookmarked button is styled and managed with Favorite Plugin
 *   - Content is _mostly_ managed with ACFs
 */

 // Get all the ACFs used on this page that may require an if statement

 // Discussion of Effectiveness
 $discuss_effect_alcohol = get_field('discussion_alcohol');
 $discuss_effect_tobacco = get_field('discussion_tobacco');
 $discuss_effect_other = get_field('other_drugs');

 // References & Further Reading
 $refer_descript = get_field('references_description');
 $refer_evidence = get_field('references_evidence');
 $refer_reading = get_field('references_further_reading');

 // Indicators of Effectiveness and Strength of Evidence
 $indicate_effect = get_field('indicator_of_effectiveness');
 $indicate_evidence = get_field('strength_of_evidence');


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			?>
			<!--Updated date & time -->
	    <?php the_favorites_button();?>
	    <span>Updated: <?php the_modified_time('F j, Y') ?> at <?php the_modified_time('g:i a');?></span>
			<?php the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<p>Used in Wyoming: <?php the_field('used_in_wyoming')?></p>
			<p>Other names: <?php the_field('other_names')?></p>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php eleanor_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'eleanor' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eleanor' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php eleanor_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
