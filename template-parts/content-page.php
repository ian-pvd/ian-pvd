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
	<header class="post-header <?php echo esc_attr( $post_header_class ) ?>">

		<?php
			if ( has_post_thumbnail() ) {
				get_template_part( 'template-parts/featured-image' );
			}
		?>

		<div class="post-header__content wrapper wrapper--content">
			<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
			<?php if ( pvd_get_the_post_header() ) : ?>
			<div class="post-header__intro">
				<?php pvd_the_post_header(); ?>
			</div>
			<?php endif; ?>
		</div>

	</header><!-- .post-header -->

	<div class="post-content wp-content wrapper wrapper--content">
		<?php the_content(); ?>
	</div><!-- .post-content -->

	<section class="repeating-content wrapper wrapper--content">
		<div class="repeating-content__item wp-content">
			<h2>@TODO: V2 Repeating Content</h2>
			<div>
				<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
			</div>
		</div>
	</section>

	<footer class="post-footer">

		<?php pvd_post_list(); ?>

		<?php // get_sidebar(); ?>

	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
