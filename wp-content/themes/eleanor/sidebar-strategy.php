<?php
/**
 * The template for displaying the Strategy Sidebar.
 * @package: eleanor
 */

?>


<div class="col-md-4 widget-area" id="sidebar-right-strategies" role="complementary">
  <aside class="widget">
    <h3>Indicator of Effectiveness & Strength of Evidence</h3>
    <img class="img_harvey" src="images/harvey-icon.png" />
  </aside>
  <aside class="widget">
    <h3>Domain & Goal</h3>
    <p><?php the_terms( $post->ID, 'causal-domain', 'Causal Domains: ', '/'); ?></p>
    <p><?php the_terms( $post->ID, 'tobacco-goals', 'Tobacco Goals: ', '/'); ?></p>
  </aside>

</div>
