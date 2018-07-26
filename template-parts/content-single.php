<?php
/**
 * Template part for displaying posts
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

	<header class="post-header">

		<?php
			// Featured Image
			if ( has_post_thumbnail() ) {
				get_template_part( 'template-parts/featured-image' );
			}
		?>

		<div class="post-header__content wrapper wrapper--content">
			<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>

			<div class="post-header__meta post-meta">
				<span class="post-meta__date"><?php the_date(); ?></span>
				<span class="post-meta__author"><?php pvd_the_post_category(); ?></span>
			</div>

			<?php if ( pvd_get_the_post_header() ) : ?>
			<div class="post-header__intro wp-content">
				<?php pvd_the_post_header(); ?>
			</div>
			<?php endif; ?>
		</div>

	</header><!-- .post-header -->

	<div class="post-content wp-content wrapper wrapper--content">
		<?php the_content(); ?>
	</div><!-- .post-content -->

	<footer class="post-footer">

		<?php pvd_post_list(); ?>

	</footer><!-- .post-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
