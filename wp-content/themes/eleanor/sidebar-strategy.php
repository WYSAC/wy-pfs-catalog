<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eleanor
 */

?>

<aside id="secondary" class="widget-area">
  <div class="widget">
    <h3>Indicator of Effectiveness & Strength of Evidence</h3>
    <img class="img_harvey" src="images/harvey-icon.png" />
</div>
<div class="widget">
  <h3>Domain & Goal</h3>
  <p><?php the_terms( $post->ID, 'causal-domain', 'Causal Domains: ', '/'); ?></p>
  <p><?php the_terms( $post->ID, 'tobacco-goals', 'Tobacco Goals: ', '/'); ?></p>
</div>
</aside><!-- #secondary -->
