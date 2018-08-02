<?php
/**
 * The template for displaying archive pages
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

			get_template_part( 'template-parts/content', 'page-work' );

		endwhile; // End of the loop.
		?>


		<section class="page-section page-section--blog">
			<?php
				pvd_post_list( [
					'list_format' => 'column',
					'post_format' => 'text',
					'read_more' => get_post_type_archive_link( 'post' ),
					'query_vars' => [
						'posts_per_page' => 6,
						'category_name' => 'web-development',
					],
				] );
			?>
		</section>

		<section class="page-section page-section--portfolio">
			<?php
				pvd_post_list( [
					'context' => 'portfolio',
					'list_title' => 'Portfolio',
					'post_format' => 'portfolio',
					'query_vars' => [
						'posts_per_page' => 6,
						'post_type' => 'work',
						'meta_query' => [
							[ 'key' => '_thumbnail_id' ],
						],
					],
					'read_more' => get_post_type_archive_link( 'work' ),
					'read_more_text' => 'View More',
				] );
			?>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
