<?php
/**
 * Single strategy post template part.
 *
 * @package eleanor
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

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
    <!--Updated date & time -->
    <p class="h6">Updated: <?php the_modified_time('F j, Y') ?> at <?php the_modified_time('g:i a');?></p>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<!-- ACF : General Information -->
      <div class="entry-meta-box">
        <p>Used in Wyoming: <?php the_field('used_in_wyoming')?></p>
        <p>Other names: <?php the_field('other_names')?></p>
      </div>


		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
    <!--Description ( post_content ) -->
    <h2>Description of Strategy</h2>
		<?php the_content(); ?>
    <hr/>
    <!-- ACFs -->
    <h2><?php ?>



	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
