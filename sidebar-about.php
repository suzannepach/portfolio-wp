<?php
/**
 * The about widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package suzannepach-portfolio-wp
 */

if ( ! is_active_sidebar( 'about-area' ) ) {
	return;
}
?>

<aside id="sidebar-about" class="widget-area">
	<?php dynamic_sidebar( 'about-area' ); ?>
</aside><!-- #sidebar-about -->
