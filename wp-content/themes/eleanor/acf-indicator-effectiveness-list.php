<?php
/**
*
*	Template Name: Indicator and Evidence List Page
* The template for displaying archive pages for indicator of Effectiveness and strength of evidence
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Eleanor
*/

get_header(); ?>
<div id="primary" class="content-area col">
	<main id="main" class="site-main main">
		<!-- =======================
		Page Content from Editor
		======================== -->
		<?php
		while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; // End of the loop.
	?>
	<?php
	/* ===================================
	Call all the arguments for the loops
	===================================== */

	/* Effectiveness */

	// Effective
	$effective_posts = get_posts(array(
		'numberposts' => -1,
		'post_type' => 'strategies',
		'meta_key' => 'indicator',
		'meta_value' => '4dbd74',
		'order'		=> 'ASC'
	));
	// Varied
	$varied_posts = get_posts(array(
		'numberposts' => -1,
		'post_type' => 'strategies',
		'meta_key' => 'indicator',
		'meta_value' => 'ffc107',
				'order'		=> 'ASC'
	));
	// Not Effective
	$not_posts = get_posts(array(
		'numberposts' => -1,
		'post_type' => 'strategies',
		'meta_key' => 'indicator',
		'meta_value' => 'f86c6b',
				'order'		=> 'ASC'
	));

	/* Evidence Strength */
	// No evidence
	$no_strengths = get_posts(array(
		'numberposts' => -1,
		'post_type' => 'strategies',
		'meta_key' => 'evidence_strength',
		'meta_value' => 'no_evidence_found',
				'order'		=> 'ASC'
	));
	// grey lit
	$grey_strengths = get_posts(array(
		'numberposts' => -1,
		'post_type' => 'strategies',
		'meta_key' => 'evidence_strength',
		'meta_value' => 'grey_lit',
				'order'		=> 'ASC'
	));
	// single pub
	$single_strengths = get_posts(array(
		'numberposts' => -1,
		'post_type' => 'strategies',
		'meta_key' => 'evidence_strength',
		'meta_value' => 'single_pub',
				'order'		=> 'ASC'
	));
	// numerous pubs
	$num_strengths = get_posts(array(
		'numberposts' => -1,
		'post_type' => 'strategies',
		'meta_key' => 'evidence_strength',
		'meta_value' => 'numerous_pub',
				'order'		=> 'ASC'
	));
	// Systematic
	$sys_strengths = get_posts(array(
		'numberposts' => -1,
		'post_type' => 'strategies',
		'meta_key' => 'evidence_strength',
		'meta_value' => 'systematic_review',
				'order'		=> 'ASC'
	));
	// cochrane
	$coc_strengths = get_posts(array(
		'numberposts' => -1,
		'post_type' => 'strategies',
		'meta_key' => 'evidence_strength',
		'meta_value' => 'cochrane_review',
				'order'		=> 'ASC'
	));


	/* ===================================
	Now get all the lists
	===================================== */
	?>
		<h2>Strategy Effectiveness</h2>
		<p><a href="#">Read more</a><p>
	<?php
	// Effective List
	if($effective_posts) {
		echo '<h3 id="in-effective">Effective</h3>';
		echo '<ul>';
		foreach($effective_posts as $effective_post) {
			echo '<li><a href="' . get_permalink($effective_post->ID) . '">' . get_the_title($effective_post->ID) . '</a></li>';
		}
		echo '</ul>';
	}
	// Varied List
	if ($varied_posts) {
		echo '<h3 id="in-varied">Varied</h3>';
		echo '<ul>';
		foreach($varied_posts as $varied_post) {
			echo '<li><a href="' . get_permalink($varied_post->ID) . '">' . get_the_title($varied_post->ID) . '</a></li>';
		}
		echo '</ul>';
	}
	// None
	if ($not_posts) {
		echo '<h3 id="in-not">Not Effective</h3>';
		echo '<ul>';
		foreach($not_posts as $not_post) {
			echo '<li><a href="' . get_permalink($not_post->ID) . '">' . get_the_title($not_post->ID) . '</a></li>';
		}
		echo '</ul>';
	}
	?>
	<h2>Strength of Evidence</h2>
	<p><a href="#">Read more</a><p>
	<?php
	if($no_strengths) {
		echo '<h3 id="ev-no">No evidence found</h3>';
		echo '<ul>';
		foreach($no_strengths as $no_strength) {
			echo '<li><a href="' . get_permalink($no_strength->ID) . '">' . get_the_title($no_strength->ID) . '</a></li>';
		}
		echo '</ul>';
	}
	if($grey_strengths) {
		echo '<h3 id="ev-grey">Grey literature</h3>';
		echo '<ul>';
		foreach($grey_strengths as $grey_strength) {
			echo '<li><a href="' . get_permalink($grey_strength->ID) . '">' . get_the_title($grey_strength->ID) . '</a></li>';
		}
		echo '</ul>';
	}
	if($single_strengths) {
		echo '<h3 id="ev-single">Single published study</h3>';
		echo '<ul>';
		foreach($single_strengths as $single_strength) {
			echo '<li><a href="' . get_permalink($single_strength->ID) . '">' . get_the_title($single_strength->ID) . '</a></li>';
		}
		echo '</ul>';
	}
	if($num_strengths) {
		echo '<h3 id="ev-num">Numerous published studies</h3>';
		echo '<ul>';
		foreach($num_strengths as $num_strength) {
			echo '<li><a href="' . get_permalink($num_strength->ID) . '">' . get_the_title($num_strength->ID) . '</a></li>';
		}
		echo '</ul>';
	}
	if($sys_strengths) {
		echo '<h3 id="ev-sys">Systematic review, meta analysis</h3>';
		echo '<ul>';
		foreach($sys_strengths as $sys_strength) {
			echo '<li><a href="' . get_permalink($sys_strength->ID) . '">' . get_the_title($sys_strength->ID) . '</a></li>';
		}
		echo '</ul>';
	}
	if($coc_strengths) {
		echo '<h3 id="ev-coc">Cochrane Review, Community Guide, NREPP</h3>';
		echo '<ul>';
		foreach($coc_strengths as $coc_strength) {
			echo '<li><a href="' . get_permalink($coc_strength->ID) . '">' . get_the_title($coc_strength->ID) . '</a></li>';
		}
		echo '</ul>';
	}
?>


</main><!--#main.main-->
</div><!--#primary-->

<?php
get_sidebar();
get_footer();
