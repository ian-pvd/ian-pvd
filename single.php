<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ianpvd
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="content-area__main site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			if ( 'work' == get_post_type() ) {
				get_template_part( 'template-parts/content', 'single-work' );
			} else {
				get_template_part( 'template-parts/content', 'single' );
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
