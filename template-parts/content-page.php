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
			<h2>@TODO: Repeating Content</h2>
			<div>
				<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
			</div>
		</div>
	</section>

	<footer class="post-footer">

		<div class="post-footer__wrapper wrapper wrapper--page">
			<h2 class="post-footer__header">Featured Posts</h2>
			<div class="post-footer__featured-posts post-list">

			<?php for ( $i = 0; $i < 3; $i++ ) { ?>

				<article class="post-list__item">
					<figure class="post-list__item-thumbnail post-thumbnail">
						<div class="post-thumbnail__frame">
							<img src="https://breath35.files.wordpress.com/2012/05/201377_199046263449473_156329461054487_602947_7963888_o.jpg" alt="">
						</div>
					</figure>
					<h1 class="post-list__item-title">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</h1>
					<div class="post-list__item-excerpt">
						<p>Donec sed odio dui. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Curabitur blandit tempus porttitor.</p>
					</div>
				</article>

			<?php } ?>

			</div>
		</div>

		<?php // get_sidebar(); ?>

	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
