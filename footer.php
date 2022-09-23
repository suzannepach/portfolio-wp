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
							<?php wp_nav_menu( 
									array( 
										'theme_location' => 'social-media', 
										'menu_class' => 'social-media-menu' 
									) 
								); 
							?>
						</nav> <!-- .social-media-navigation -->
					</div> <!-- .contact-links -->
      			</div> <!-- .contact-conten -->
				<div class="site-description copyright">
					<p>&copy; <?php bloginfo('title'); ?></p>
				</div> <!-- .site-description.copyright -->
			</div><!-- .site-info -->	
		</div><!-- .content-wrapper -->
	</footer><!-- #colophon -->

	<!-- For now I have added the primary menu twice this is the one that 
	shows on mobile. 
	If I use Grid instead of Flex I can probably use just the one menu. -->
	<div id="mobile-menu">
		<div class="content-wrapper">
			<nav id="site-navigation" class="main-navigation menu">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'suzannepach-portfolio-wp' ); ?></button> -->
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .content-wrapper -->
	</div><!-- #mobile-menu -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
