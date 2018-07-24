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

			<section>
				LATEST POSTS (ZONE)
			</section>

			<section>
				WORK (ZONE, CPT)
				3 CODEPEN, GITHUB OR PROJECT ITEMS
			</section>

			<section>
				SOCIAL MEDIA
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
