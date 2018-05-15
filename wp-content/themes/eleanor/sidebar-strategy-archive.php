<?php
/**
* The sidebar for the archive page for the Strategies post type
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Eleanor
*/

?>

<aside id="strategy-archive-sidebar" class="widget-area col">
  <div class="strategy-search row">
    <div class="strategy-search-toggle col">
      <a class="btn btn-primary" data-toggle="collapse" href="#archiveFilterCollapse" role="button" aria-expanded="false" aria-controls="archiveFilterCollapse">Filters
      </a>
      <div class="collapse" id="archiveFilterCollapse">
        <div class="card card-body">
          <?php echo do_shortcode( '[searchandfilter
          [searchandfilter taxonomies="search,causal-domain,tobacco-goals"]
 post_types="strategies" types=", checkbox, checkbox"]');?>
          <div class="row">
            <div class="widget col">
              <h4>Effectiveness</h4>
              <ul>
                <li>link</li>
                <li>link</li>
                <li>link</li>
              </ul>
            </div><!--.widget-->
            <div class="widget col">
              <h4>Strengths</h4>
              <ul>
                <li>link</li>
                <li>link</li>
                <li>link</li>
              </ul>
            </div><!--.widget-->
            <div class="widget col">
              <h4>Domains/Goals</h4>
              <ul>
                <li>link</li>
                <li>link</li>
                <li>link</li>
              </ul>
            </div><!--.widget-->
            <div class="widget col">
              <h4>Targets</h4>
              <ul>
                <li>link</li>
                <li>link</li>
                <li>link</li>
              </ul>
            </div><!--.widget-->
          </div><!--.row-->
        </div><!--.card-->
      </div><!--.collapse-->
    </div><!--.strategy-search-toggle-->
  </div><!--.strategy-search.row-->
</aside><!-- #secondary -->
