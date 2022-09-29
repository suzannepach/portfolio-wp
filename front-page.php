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
<main id="primary" class="site-main">
	<?php
			get_template_part( 'template-parts/content', 'page' );
	?>
</main><!-- #main -->

<!-- RECENT PROJECTS -->
<section class="featured-work">
	<div class="site-content clearfix">
		<h4>Recent Work</h4>
		<ul class="homepage-featured-work">
		<?php query_posts('posts_per_page=4&post_type=projects'); ?>
		<!-- the loop -->
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "medium";
			?>
			<li class="individual-featured-work">
				<a  href="<?php the_permalink(); ?>">
					<figure>	
						<?php echo wp_get_attachment_image( $image_1, $size ); ?>
					</figure>
					<h3><?php the_title(); ?></h3>
				</a>
			</li>
			<?php endwhile; // end of the loop. ?> 
		<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>
	</div>
</section>

<?php
get_footer();
?>