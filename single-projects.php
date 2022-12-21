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

			<article class="single-project clearfix">
				<div class= "content-wrapper bigger-screen-flex">
					<aside class="single-project-sidebar">
						<h2><?php the_title(); ?></h2> 	
						<p class="single-project-skills"><?php echo $skills_used; ?></p>

						<?php the_content(); ?>

						<p><a href="<?php echo $project_link; ?>" class="read-more-link" target="_blank">Visit Live Site &rsaquo;</a></p>
						<p class="github-p"><a href="<?php echo $github_link; ?>" class="read-more-link" target="_blank">See Code On GitHub &rsaquo;</a></p>	
					</aside>
					<div class="single-project-images">
						<div class= "content-wrapper">
							<?php if($image_1) { 
								echo wp_get_attachment_image( $image_1, $size );
							}
							if($description_image_1) { ?>
								<p><?php echo $description_image_1; ?></p> 
							<?php }
							if($image_2) {
								echo wp_get_attachment_image( $image_2, $size );
							}
							if($description_image_2) {  ?>
								<p><?php echo $description_image_2; ?></p> 
							<?php }
							if($image_3) {
								echo wp_get_attachment_image( $image_3, $size );
							}				
							if($description_image_3) {  ?>
								<p><?php echo $description_image_3; ?></p>
							<?php } ?>
						</div>
					</div>
				</div>
			</article>	

		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->

</main><!-- #main -->	

<?php
get_footer();
?>
