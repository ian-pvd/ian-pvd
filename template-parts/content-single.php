<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ianpvd
 */

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
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="post-meta">
					<?php ianpvd_posted_on(); ?>
				</div><!-- .post-meta -->
			<?php endif; ?>
		</div>

	</header><!-- .post-header -->

	<div class="post-content wp-content wrapper wrapper--content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ianpvd' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title();
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ianpvd' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .post-content -->

	<footer class="post-footer">
		<?php ianpvd_entry_footer(); ?>
	</footer><!-- .post-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
