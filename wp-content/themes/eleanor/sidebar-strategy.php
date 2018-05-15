<?php
/**
* The sidebar for the Strategies post type
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Eleanor
*/

?>

<aside id="secondary" class="widget-area col">
  <!-- ===========================
  Effectiveness
  =========================== -->
  <div class="widget card">
    <div class="card-header">
      <h3 class="card-title text-uppercase"><small>Effectiveness & Strength of Evidence</small></h3>
    </div>
    <div class="card-body">
      <div class="row">
        <!-- ===========================
        Harvey Balls
        =========================== -->
        <div class="col text-center">
          <?php
          $color = get_field('indicator');
          $strength = get_field('evidence_strength');

            switch($strength) {
              /* ======= No Evidence ======= */
              case 'no_evidence_found':
              echo '<svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 512 512"><title>No evidence found</title><desc>Harvey Ball icon indicating evidence strength</desc><g fill="none"><g style="stroke-width:8;stroke:#' . $color . '"><circle cx="256.5" cy="256.5" r="247.5"/></g></g></svg>';
              break;
              /* ======= Grey Lit ======= */
              case 'grey_lit':
              echo '<svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 512 512"><title>Grey literature</title><desc>Harvey Ball icon indicating evidence strength</desc><g fill="none"><g style="stroke-width:8;stroke:#' . $color . '"><path d="M255.5 257.7L18.7 180.7C52.7 76.2 145.5 8.7 255.5 8.7L255.5 257.7Z"/><path d="M255.5 257.7L109.1 459.1C20.2 394.4-15.3 285.3 18.7 180.7L255.5 257.7Z"/><path d="M255.5 257.7L401.8 459.1C312.8 523.7 198.1 523.7 109.1 459.1L255.5 257.7Z"/><path d="M255.5 257.7L492.2 180.7C526.2 285.3 490.7 394.4 401.8 459.1L255.5 257.7Z"/><path d="M255.5 257.7L255.5 8.7C365.4 8.7 458.2 76.2 492.2 180.7L255.5 257.7Z" fill="#' . $color . '"/></g></g></svg>';
              break;
              /* ======= Single Publication ======= */
              case 'single_pub':
              echo '<svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 512 512"><title>Single published study</title><desc>Harvey Ball icon indicating evidence strength</desc><g fill="none"><g style="stroke-width:8;stroke:#' . $color . '"><path d="M255.5 257.7L18.7 180.7C52.7 76.2 145.5 8.7 255.5 8.7L255.5 257.7Z"/><path d="M255.5 257.7L109.1 459.1C20.2 394.4-15.3 285.3 18.7 180.7L255.5 257.7Z"/><path d="M255.5 257.7L401.8 459.1C312.8 523.7 198.1 523.7 109.1 459.1L255.5 257.7Z"/><path d="M255.5 257.7L492.2 180.7C526.2 285.3 490.7 394.4 401.8 459.1L255.5 257.7ZM255.5 257.7L255.5 8.7C365.4 8.7 458.2 76.2 492.2 180.7L255.5 257.7Z" fill="#' . $color . '"/></g></g></svg>';
              break;
              /* ======= Numerous Publications ======= */
              case 'numerous_pub':
              echo '<svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 512 512"><title>Numerous published studies</title><desc>Harvey Ball icon indicating evidence strength</desc><g fill="none"><g style="stroke-width:8;stroke:#' . $color . '"><path d="M255.5 257.7L18.7 180.7C52.7 76.2 145.5 8.7 255.5 8.7L255.5 257.7Z"/><path d="M255.5 257.7L109.1 459.1C20.2 394.4-15.3 285.3 18.7 180.7L255.5 257.7Z"/><path d="M255.5 257.7L401.8 459.1C312.8 523.7 198.1 523.7 109.1 459.1L255.5 257.7ZM255.5 257.7L492.2 180.7C526.2 285.3 490.7 394.4 401.8 459.1L255.5 257.7ZM255.5 257.7L255.5 8.7C365.4 8.7 458.2 76.2 492.2 180.7L255.5 257.7Z" fill="#' . $color . '"/></g></g></svg>';
              break;
              /* ======= Systematic Review / Meta  ======= */
              case 'systematic_review':
              echo '<svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 512 512"><title>Systematic review, meta-analysis</title><desc>Harvey Ball icon indicating evidence strength</desc><g fill="none"><g style="stroke-width:8;stroke:#' . $color . '"><path d="M255.5 257.7L18.7 180.7C52.7 76.2 145.5 8.7 255.5 8.7L255.5 257.7Z"/><path d="M255.5 257.7L109.1 459.1C20.2 394.4-15.3 285.3 18.7 180.7L255.5 257.7ZM255.5 257.7L401.8 459.1C312.8 523.7 198.1 523.7 109.1 459.1L255.5 257.7ZM255.5 257.7L492.2 180.7C526.2 285.3 490.7 394.4 401.8 459.1L255.5 257.7ZM255.5 257.7L255.5 8.7C365.4 8.7 458.2 76.2 492.2 180.7L255.5 257.7Z" fill="#' . $color . '"/></g></g></svg>';
              break;
              /* ======= Cochrane, Community Guide, NREPP ======= */
              case 'cochrane_review':
              echo '<svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 512 512"><title>Cochrane Review, Community Guide, NREPP</title><desc>Harvey Ball icon indicating evidence strength</desc><g fill="none"><g style="stroke-width:8;stroke:#' . $color . '"><circle cx="256.5" cy="256.5" r="247.5" fill="#' . $color . '"/></g></g></svg>';
              break;
              /* ======= Default / No Icon ======= */
              default:
              echo "No indicator";
              break;
            } ?>
        </div>
        <div class="col">

          <p></p>
        </div>
      </div>
      <p>Used in Wyoming: <?php the_field('used_in_wyoming')?></p>
    </div>
  </div>
  <!-- ===========================
  Target Substances
  =========================== -->
  <div class="widget card">
    <div class="card-header">
      <h3 class="card-title text-uppercase"><small>Target Substances</small></h3>
    </div>
    <div class="card-body">
      <div class="target_sub_icon">
      <!-- ===========================
      Target Substances  / Icons
      =========================== -->
      <?php
      if( in_array( 'tobacco', get_field('target_substances') ) )
      {
        echo '<i class="fas fa-smoking" title="Tobacco"></i>';
      }
      if( in_array( 'alcohol', get_field('target_substances') ) )
      {
        echo '<i class="fas fa-glass-martini" title="Alcohol"></i>';
      }
      if( in_array( 'other_drugs', get_field('target_substances') ) )
      {
        echo '<i class="fas fa-pills" title="Prescription and other drugs"></i>';
      }
      ?>
    </div>
    </div>
  </div>
  <!-- ===========================
  Domain and Goal
  =========================== -->
  <div class="widget card">
    <div class="card-header">
      <h3 class="card-title text-uppercase"><small>Causal Domain & Goals</small></h3>
    </div>
    <div class="card-body">
      <p><?php the_terms( $post->ID, 'causal-domain', 'Causal Domains: ', '/'); ?></p>
      <p><?php the_terms( $post->ID, 'tobacco-goals', 'Tobacco Goals: ', '/'); ?></p>
    </div>
  </div>
</aside><!-- #secondary -->
