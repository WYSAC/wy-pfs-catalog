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


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
  <!-- ===========================
  ENTRY HEADER
  =========================== -->
  <header class="entry-header">
    <?php
    if ( is_singular() ) :
      ?>
      <?php the_title( '<h1 class="entry-title">', '</h1>' );
      else :
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      endif;
      ?>
  </header><!-- .entry-header -->
  <!-- ===========================
  ENTRY Content
  =========================== -->

  <div class="entry-content my-3">
    <!-- ===========================
        Content / Description
    =========================== -->
    <h2 class="mb-3">Description of Strategy</h2>
    <?php the_content(); ?>
    <?php if ( get_field('other_names') ): ?>
    <h3 class="h4">Also known as...</h3>
      <p><?php the_field('other_names')?></p>
    <?php endif; ?>
    <!-- ===========================
        Content / Discussion
    =========================== -->
    <h2 class="mb-3">Discussion of Effectiveness</h2>
    <!--Alcohol-->
    <?php if( get_field('discussion_alcohol') ): ?>
      <h3>Alcohol</h3>
      <p><?php the_field('discussion_alcohol') ?></p>
    <?php endif; ?>
        <!--Tobacco-->
    <?php if( get_field('discussion_tobacco') ): ?>
      <h3>Tobacco</h3>
      <p><?php the_field('discussion_tobacco') ?></p>
    <?php endif; ?>
        <!--Other Drugs-->
    <?php if( get_field('other_drugs') ): ?>
      <h3>Prescription & Other Drugs</h3>
      <p><?php the_field('other_drugs') ?></p>
    <?php endif; ?>

  </div><!-- .entry-content -->
  <!-- ===========================
  ENTRY FOOTER
  =========================== -->
  <footer class="entry-footer my-5">
    <!-- ===========================
    Reference tabs
    =========================== -->
    <h2>References</h3>
    <ul class="nav nav-tabs" id="reference-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="strategy-tab" data-toggle="tab" href="#strategy" role="tab" aria-controls="strategy" aria-selected="true">Strategy Description</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="evidence-tab" data-toggle="tab" href="#evidence" role="tab" aria-controls="evidence" aria-selected="false">Evidence Base</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="further-tab" data-toggle="tab" href="#further" role="tab" aria-controls="further" aria-selected="false">Further Reading</a>
      </li>
    </ul>
    <div class="tab-content" id="reference-tabs-content">
      <div class="tab-pane fade show active" id="strategy" role="tabpanel" aria-labelledby="strategy-tab">
      <?php the_field('references_description'); ?>
    </div>
      <div class="tab-pane fade" id="evidence" role="tabpanel" aria-labelledby="evidence-tab">
            <?php the_field('references_evidence'); ?>
          </div>
      <div class="tab-pane fade" id="further" role="tabpanel" aria-labelledby="further-tab">
            <?php the_field('references_further_reading'); ?>
          </div>
    </div>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
