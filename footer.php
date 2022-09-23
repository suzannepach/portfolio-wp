<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package suzannepach-portfolio-wp
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="content-wrapper">
			<div class="site-info">
				<div class="contact-content">
       				 <div class="contact-links">
						<nav class="social-media-navigation" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
						</nav> <!-- .social-media-navigation -->
					</div> <!-- .contact-links -->
      			</div> <!-- .contact-conten -->
				<div class="site-description copyright">
					<p>&copy; <?php bloginfo('title'); ?></p>
				</div> <!-- .site-description.copyright -->
			</div><!-- .site-info -->	
		</div><!-- .content-wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
