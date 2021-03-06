<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ianpvd
 */

$post_header_class = '';
if ( pvd_get_the_post_header() ) {
	$post_header_class = 'post-header--has-intro';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="post-header post-header--page post-header--page-work <?php echo esc_attr( $post_header_class ) ?>">

		<?php
			// Featured Image
			if ( has_post_thumbnail() ) {
				get_template_part( 'template-parts/featured-image' );
			}
		?>

		<div class="post-header__content post-header__content--page">
			<?php the_title( '<h1 class="post-title post-title--page">', '</h1>' ); ?>
			<?php if ( pvd_get_the_post_header() ) : ?>
			<div class="post-header__intro wp-content">
				<?php pvd_the_post_header(); ?>
			</div>
			<?php endif; ?>
		</div>

		<?php
		if ( has_nav_menu( 'work-submenu' ) ) {
			wp_nav_menu( array(
				'theme_location' => 'work-submenu',
				'menu_id'        => 'work-submenu',
			) );
		}
		?>

	</header><!-- .post-header -->

	<?php if ( get_the_content() ) : ?>
	<div class="post-content wp-content">
		<?php the_content(); ?>
	</div><!-- .post-content -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
