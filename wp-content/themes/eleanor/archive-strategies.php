<?php
/**
 * The template for displaying Strategies archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eleanor
 */

get_header(); ?>

	<div id="primary" class="content-area main col">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );

				?>
			</header><!-- .page-header -->

			<table id="strategy-archive-table" class="table table-responsive">
				<thead>
			    <tr>
			      <th scope="col"><i class="fa fa-circle" title="Effectiveness"></i></th>
			      <th scope="col">Strategy Name</th>
			      <th scope="col">Domain &amp; Goal</th>
			      <th scope="col">Target Substance</th>
			      <th scope="col">&nbsp;</th>
			    </tr>
			  </thead>
			  <tbody>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>
			<tr>
				<th scope="col">
					<i class="fas fa-circle" style="color:#<?php the_field('indicator'); ?>;"></i>
				</th>
				<td scope="col"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></td>
				<td scope="col"><?php the_terms( $post->ID, 'causal-domain', 'Causal Domains: ', '/'); ?><br/><?php the_terms( $post->ID, 'tobacco-goals', 'Tobacco Goals: ', '/'); ?></td>
				<td scope="col">
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
		      ?></td>
					<td scope="col"><a href="<?php the_permalink();?>" class="btn btn-secondary">View Strategy</a></td>
				</tr>
			<?php endwhile;?>
		</table>
		<?php
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
