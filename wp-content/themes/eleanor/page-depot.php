<?php
/**
*
* Template Name: Depot Home Page Template
*
* The template for displaying the depot home page
*
*		FULL WIDTH
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Eleanor
*/

get_header('depot'); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main main container-fluid">
		<!-- =======================
		Page Content from Editor
		======================== -->
		<?php
		while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; // End of the loop.
	?>
	<!-- =======================
	Depot Features
	======================== -->
	<div class="row align-items-center depot-home-features">
		<div class="col">
			<h2 class="text-center"><?php the_field('feature_icon_1');?><br/><?php the_field('feature_title_1');?></h2>
		</div>
		<div class="col">
			<h2 class="text-center"><?php the_field('feature_icon_2');?><br/><?php the_field('feature_title_2');?></h2>
		</div>
		<div class="col">
			<h2 class="text-center"><?php the_field('feature_icon_3');?><br/><?php the_field('feature_title_3');?></h2>
		</div>
	</div>

	<!-- =======================
	All of the Tools.
	The tools are posts in the cateogry "depot posts" ID=17
	======================== -->

	<!-- =======================
	Unlocked Tools
	======================== -->

	<?php
	global $post; // required
	$args_1 = array(
		'category' => 17, // show only Depot Tools
		'meta_key' => 'depot_tool_locked', //and those that are unlocked
		'meta_value' => 'unlocked'
	);

	$args_2 = array (
		'category' => 17, // show only Depot Tools
		'meta_key' => 'depot_tool_locked', //and those that are unlocked
		'meta_value' => 'locked'
	);
	$unlocked_posts = get_posts($args_1);
	foreach($unlocked_posts as $post) : setup_postdata($post); ?>

	<div class="depot-section-unlocked row p-5">
		<div class="col-sm depot-section-image">
			<figure class="figure">
			<img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="Screenshot of <?php the_title();?>">
		</figure>
		</div>
		<div class="col-sm depot-section-text">
			<h2 class="display-4"><?php the_title();?></h2>
			<p class="lead"><?php the_content();?></p>
			<a class="btn btn-lg btn-outline-light" href="<?php the_field('depot-tool-url');?>">Explore</a>
			</div>
		</div>
	<?php endforeach;
	wp_reset_postdata(); ?>
	<!-- =======================
	Locked Tools
	======================== -->
	<div class="row depot-section-locked p-3-sm p-5-md my-5">
	<?php
	$locked_posts = get_posts($args_2);
	foreach($locked_posts as $post) : setup_postdata($post); ?>
	<div class="col-sm-12 col-md">
		<div class="card">
			<img class="card-img-top" src="<?php the_post_thumbnail_url();?>" alt="Screenshot of <?php the_title();?>" >
			<div class="card-body">
				<h3 class="card-title"><?php the_title();?></h2>
				<p class="card-text"><?php the_content();?></p>
				<a class="btn btn-lg btn-primary" href="<?php the_field('depot-tool-url');?>"><i class="fa fa-lock"></i>&nbsp;Login</a>
			</div>
		</div>
	</div>
		<?php endforeach;
		?>
	</div>

</main><!--#main.main-->
</div><!--#primary-->

<?php
get_footer('depot');
?>
