<?php
/**
 * The template for displaying the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package suzannepach-portfolio-wp
 */

get_header();
?>
<main id="primary" class="site-main front-page">
	<?php
			get_template_part( 'template-parts/content', 'page' );
	?>
</main><!-- #main -->

<!-- RECENT PROJECTS -->
<section id="work">
	<div class="site-content clearfix content-wrapper">
		<h2>Recent Work</h2>
		<ul class="projects">
		<?php query_posts('posts_per_page=4&post_type=projects'); ?>
		<!-- the loop -->
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				// $size = "medium";
				$skills_used = get_field('skills_used');
			?>
			<li class="individual-project">
				<div class="space-above-project"></div>
				<a  href="<?php the_permalink(); ?>">
					<figure>	
						<?php echo wp_get_attachment_image( $image_1, $size ); ?>
					</figure>
					<h4><?php the_title(); ?></h4>
					<p><span><?php echo $skills_used; ?></span></p>
				</a>
			</li>
			<?php endwhile; // end of the loop. ?> 
		<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>
	</div>
</section>

<?php
get_sidebar('about');
get_footer();
?>