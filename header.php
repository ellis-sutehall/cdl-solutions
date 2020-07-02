<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cdl-solutions
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<title><?php wp_title('|', true, 'right'); ?></title>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cdl-solutions' ); ?></a>

	<header id="masthead" class="site-header navbar">
		<div class="container">
			<div class="navbar-brand">
				<a class="header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">CDL Solutions | Home</a>
				<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="site-navigation">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>
			</div>

			<nav id="site-navigation" class="main-navigation navbar-menu">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cdl-solutions' ); ?></button> -->
				<?php
				$args = array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu' => 'menu 1',
				);
				wp_nav_menu($args);
				?>
			</nav>
			
		</div>
	
	</header><!-- #masthead -->
