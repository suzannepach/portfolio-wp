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
<?php
get_footer();
?>