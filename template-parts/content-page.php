<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ianpvd
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">

		<?php
			if ( has_post_thumbnail() ) {
				get_template_part( 'template-parts/featured-image' );
			}
		?>

		<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>

		<div>@TODO: EXCERPT</div>

	</header><!-- .post-header -->

	<div class="post-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ianpvd' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .post-content -->
</article><!-- #post-<?php the_ID(); ?> -->
