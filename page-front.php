<?php
/**
 * Template for displaying the custom front page
 *
 * Template Name: Front Page
 *
 * @package ianpvd
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			// Front Page WP Content
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page-front' );

			endwhile; // End of the loop.
			?>

			<section class="home-section home-section--recent-posts">
				<?php
					// TODO – v2, Replace with featured posts zone
					pvd_post_list( [
						'read_more' => get_post_type_archive_link( 'post' ),
					] );
				?>
			</section>

			<section class="home-section home-section--portfolio">
				<?php
					// TODO – WORK (ZONE, CPT), 3 CODEPEN, GITHUB OR PROJECT ITEMS
					pvd_post_list( [
						'context' => 'recent-work',
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
			</section>

			<section class="home-section home-section--social">
				<?php get_sidebar( 'social' ); ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
