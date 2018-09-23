<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ianpvd
 */

get_header(); ?>

	<div id="primary" class="content-area post-archive">
		<main id="main" class="site-main" role="main">
			<div class="post-list post-list--archive post-list__wrapper">

				<header class="archive-header">
					<?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
				</header><!-- .page-header -->

				<div class="post-list__feed post-list__feed--archive post-list__feed--touts">

				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						if ( is_post_type_archive( 'work' ) ) {
							get_template_part( 'template-parts/content', 'list-portfolio' );
						} else {
							get_template_part( 'template-parts/content', 'list-tout' );
						}

					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
				</div>

				<?php the_posts_navigation(); ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
