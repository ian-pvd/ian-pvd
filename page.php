<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ianpvd
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				if ( is_page( 'about' ) ) {
					get_template_part( 'template-parts/content', 'page-about' );
				} else {
					get_template_part( 'template-parts/content', 'page' );
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

		<section class="content-area__footer">

			<?php
				pvd_post_list( [
					'query_vars' => [
						'posts_per_page' => 3,
					],
				] );
			?>

		</section><!-- .content-recirc -->
	</div><!-- #primary -->

<?php
get_footer();
