<?php
/**
* Template Name: Environmental Strategies Home Page
*
*		FULL WIDTH
*
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Eleanor
*/

get_header(); ?>
<div id="primary" class="content-area col">
	<main id="main" class="site-main main">
		<!-- =======================
		Content from Page
		======================== -->
							<?php
							while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

						endwhile; // End of the loop.
						?>
<!-- =======================
Link Boxes
======================== -->
<div class="row">
		<!-- =======================
		Effective
		======================== -->
		<div class=" col col-md-4">
		<div class="card bg-success text-white text-center">
			<div class="card-body">
				<p class="h2"><i class="far fa-check-circle"></i></p>
				<h2>View Effective Strategies</h2>
			</div>
		</div>
	</div>
	<!-- =======================
	Varied
	======================== -->
	<div class=" col col-md-4">
	<div class="card bg-warning text-white text-center">
		<div class="card-body">
			<p class="h2"><i class="far fa-question-circle"></i></p>
			<h2>Strategies with Varied Evidence of Effectiveness</h2>
		</div>
	</div>
</div>
		<!-- =======================
		Not Effective
		======================== -->
		<div class=" col col-md-4">
		<div class="card bg-red text-white text-center">
			<div class="card-body">
				<p class="h2"><i class="far fa-times-circle"></i></p>
				<a href="<?php get_term_link('23');?>"?><h2>View Ineffective Strategies</h2></a>
			</div>
		</div>
	</div>
		</div><!--row-->
	<div class="row">
		<!-- =======================
		Causal Domains
		======================== -->
		<div class="col-12 col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="card-title h3">Causal Domains</div>
				<div class="card-text">
				<?php
				$args = array (
					'_builtin' => false,
					'public' => true,
					'taxonomy' => 'causal-domain',
					'hide_empty' => false,
					'orderby' => 'count',
					'order' => 'DEC'
				);
				$causual_domains = get_terms($args);
				foreach ($causual_domains as $causual_domain) {
					echo '<p><a href="'. esc_url( get_term_link( $causual_domain ) ) . '" title="' . $causual_domain->name . '" class=" ">' . $causual_domain->name . '&nbsp;(' . $causual_domain->count . ')</a>';
				}
				?>
			</div>
			</div>
		</div>
	</div><!-- col Causal Domains-->
	<!-- =======================
		Tobacco Goals
	======================== -->
	<div class="col-12 col-md-6">
	<div class="card">
		<div class="card-body">
			<div class="card-title h3">Tobacco Goals</div>
			<div class="card-text">
			<?php
			$args = array (
				'_builtin' => false,
				'public' => true,
				'taxonomy' => 'tobacco-goals',
				'hide_empty' => false,
				'orderby' => 'count',
				'order' => 'DEC'
			);
			$tobacco_goals = get_terms($args);
			foreach ($tobacco_goals as $tobacco_goal) {
				echo '<p><a href="'. esc_url( get_term_link( $tobacco_goal ) ) . '" title="' . $tobacco_goal->name . '" class=" ">' . $tobacco_goal->name . '&nbsp;(' . $tobacco_goal->count . ')</a>';
			}
			?>
		</div>
		</div>
	</div>
</div><!-- col Causal Domains-->
</div><!--row-->
</main><!--#main.main-->
</div><!--#primary-->

<?php
get_footer();
