<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ianpvd
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="post-list post-list--search post-list__wrapper">

				<header class="archive-header archive-header--search">
					<h1 class="archive-title archive-title--search"><?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Results for: %s', 'ianpvd' ), '<span>' . get_search_query() . '</span>' );
					?></h1>
					<?php get_search_form(); ?>
				</header><!-- .archive-header -->

				<?php if ( have_posts() ) : ?>

					<div class="post-list__feed post-list__feed--search post-list__feed--touts">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						if ( 'work' == get_post_type() ) {
							get_template_part( 'template-parts/content', 'list-portfolio' );
						} else {
							get_template_part( 'template-parts/content', 'list-tout' );
						}

					endwhile;
					?>

					</div>

				<?php
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

				<?php the_posts_navigation(); ?>
			</div>

			<section class="content-area__footer">

				<?php
					pvd_post_list( [
						'query_vars' => [
							'posts_per_page' => 3,
						],
					] );
				?>

			</section><!-- .content-recirc -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
