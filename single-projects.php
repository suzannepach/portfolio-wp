<?php
/**
 * The template for displaying a single project.
 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package suzannepach-portfolio-wp
 */

get_header();
?>

<main id="primary" class="site-main site-content">
	<!-- The case studies form had custom fields added using the plugin Advanced Cusatom Fields. 
	The code in the loop here relates to those custom fields (see SK wordpress 203 lesson 8 step 5). -->
	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$skills_used = get_field('skills_used');
				$project_link = get_field('project_link');
				$github_link = get_field('github_link');
				$description_image_1 = get_field('description_image_1');
				$image_1 = get_field('image_1');
				$description_image_2 = get_field('description_image_2');
				$image_2 = get_field('image_2');
				$description_image_3 = get_field('description_image_3');
				$image_3 = get_field('image_3');
				$size = "full";
			?>
				<article class="case-study clearfix">
					<aside class="case-study-sidebar">
						<h2><?php the_title(); ?></h2> 
						<h4><span><?php echo $skills_used; ?></span></h4>

						<?php the_content(); ?>

						<p><a href="<?php echo $project_link; ?>" class="read-more-link">Visit Live Site &rsaquo;</a></p>
						<p><a href="<?php echo $github_link; ?>" class="read-more-link">See Code On GitHub &rsaquo;</a></p>
					</aside>
					<div class="case-study-images">
						<?php if($description_image_1) { ?>
							<p><?php echo $description_image_1; ?></p> 
						<?php }
						if($image_1) { 
							echo wp_get_attachment_image( $image_1, $size );
						} 
						if($description_image_2) {  ?>
							<p><?php echo $description_image_2; ?></p> 
						<?php }
						if($image_2) {
							echo wp_get_attachment_image( $image_2, $size );
						}
						if($description_image_3) {  ?>
							<p><?php echo $description_image_3; ?></p>
						<?php }
						if($image_3) {
							echo wp_get_attachment_image( $image_3, $size );
						} ?>
					</div>
				</article>	

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

	<nav id="navigation" class="container">
		<div class="left"><a href="<?php echo site_url('/projects/') ?>">&larr; <span>Back to Projects</span></a></div>
	</nav>
</main><!-- #main -->

<?php
get_footer();
?>
