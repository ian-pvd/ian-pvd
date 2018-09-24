<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ianpvd
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php get_template_part( 'template-parts/header-includes' ); ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-header__wrapper">
			<div class="site-branding">
				<?php
				ianpvd_site_title();

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<div class="site-navigation">
				<button id="mobile-nav-toggle" class="site-navigation__mobile-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ianpvd' ); ?></button>
				<div class="site-navigation__menu-wrapper">
					<nav class="primary-menu primary-menu--top-level primary-menu--priority-nav" role="navigation">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary-nav',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav>
					<div class="social-menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social-links',
								'menu_id'        => 'social-links',
							) );
						?>
					</div>
				</div>
			</div><!-- .site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
