<?php
/**
 * Template part for displaying front page content
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

		<?php if ( pvd_get_the_post_header() ) : ?>
		<div class="post-header__content">
			<div class="post-header__intro">
				<?php pvd_the_post_header(); ?>
			</div>
		</div>
		<?php endif; ?>

	</header><!-- .post-header -->

	<?php if ( get_the_content() ) : ?>
	<div id="post-content" class="post-content wp-content">
		<?php the_content(); ?>
	</div><!-- .post-content -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
