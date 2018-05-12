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
          ?>
          <span class="strategy-icon" style="color: <?php echo $color ?> ;">
            <?php
            switch($strength) {
              case 'no_evidence_found':
              echo '<i class="fas fa-bell"></i>';
              break;
              case 'grey_lit':
              echo '<i class="fab fa-apple"></i>';
              break;
              case 'single_pub':
              echo '<i class="fa fa-adjust"></i>';
              break;
              case 'numerous_pub':
              echo '<i class="fa fa-burn"></i>';
              break;
              case 'systematic_review':
              echo '<i class="fas fa-box-open"></i>';
              break;
              case 'cochrane_review':
              echo '<i class="fas fa-bug"></i>';
              break;
              default:
              echo "No indicator";
              break;
            } ?>
          </span>
        </div>
        <div class="col">
          <p>** Description / labels of the harvey balls</p>
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
      <!-- ===========================
      Target Substances  / Icons
      =========================== -->
      <?php
      if( in_array( 'tobacco', get_field('target_substances') ) )
      {
        echo '<img src="http://www.clockworkpixels.com/PuppySanctuary/Puppy07.jpg" title="Tobacco" />';
      }
      if( in_array( 'alcohol', get_field('target_substances') ) )
      {
        echo '<img src="http://www.clockworkpixels.com/PuppySanctuary/Puppy05.jpg" title="Alcohol" />';
      }
      if( in_array( 'other_drugs', get_field('target_substances') ) )
      {
        echo '<img src="http://www.clockworkpixels.com/PuppySanctuary/Puppy12.jpg" title="Prescription & Other Drugs" />';
      }
      ?>
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
