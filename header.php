<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package suzannepach-portfolio-wp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Yeseva+One&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'suzannepach-portfolio-wp' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding content-wrapper">
			<div id="name">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<p class="logo_tagline"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('description'); ?></a></p>
			</div>

			<!-- For now I have added the primary menu twice this is the one that 
			shows on desktop. 
			If I use Grid instead of Flex I can probably use just the one menu. -->
			<div class="top-menu">
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
			</div><!-- .tablet-menu -->
		</div><!-- .content-wrapper -->
	</header><!-- #masthead -->
