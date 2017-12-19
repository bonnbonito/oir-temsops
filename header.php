<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OIR_Temsops
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'oirtemsops' ); ?></a>

	<header id="masthead" class="ui basic mtb0 segment site-header">
		<div class="ui grid stackable">
			<a id="hamburger" href="#" class="menu-toggle" >
				<span class="top-bar"></span>
				<span class="middle-bar"></span>
				<span class="bottom-bar"></span>
			</a>
			<div class="five wide column site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>" alt="<?php bloginfo( 'name' ); ?>" class="ui image">
				</a>
			</div>
			<div class="nine wide column middle aligned  large screen only">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'oirtemsops' ); ?></button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container' => false,
							'walker' => new Walker_Nav_Primary,
							'items_wrap' => '<div id="%1$s" class="ui secondary %2$s">%3$s</div>'
						) );
					?>
				</nav><!-- #site-navigation -->
			</div>
			<div class="two wide column header-phone large screen only">
				<div class="header-phone-middle">
					<a href="#"><i class="icon mobile"></i>855.369.7404</a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content ui basic mtb0 segment">
