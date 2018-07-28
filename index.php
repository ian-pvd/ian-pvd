<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ianpvd
 */

get_header(); ?>

	<div id="primary" class="content-area post-archive">
		<main id="main" class="site-main" role="main">

			<div class="post-list post-list--archive post-list--recent-posts post-list__wrapper">

				<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="post-list__header post-list__header--recent-posts">
						<?php single_post_title(); ?>
					</h1>
				</header>
				<?php endif; ?>

				<div class="post-list__feed post-list__feed--recent-posts post-list__feed--grid-thirds">

				<?php
					if ( have_posts() ) {

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'list-tout' );

						endwhile;

						the_posts_navigation();

					} else {

						get_template_part( 'template-parts/content', 'none' );

					}
				?>
				</div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
