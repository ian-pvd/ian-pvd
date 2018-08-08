<?php
/**
 * Resume page template
 *
 * @package ianpvd
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page-resume' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

		<section class="content-area__footer">

			<?php
				pvd_post_list( [
					'context' => 'portfolio',
					'list_title' => 'Recent Work',
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

		</section><!-- .content-recirc -->
	</div><!-- #primary -->

<?php
get_footer();
