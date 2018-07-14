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
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ianpvd' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .post-content -->
</article><!-- #post-<?php the_ID(); ?> -->
