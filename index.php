<?php
/**
 * The main template file for displaying the blog post list.
 *
 * @package ianpvd
 */

get_header(); ?>


	<div id="primary" class="content-area post-archive">
		<main id="main" class="site-main" role="main">
			<div class="post-list post-list--blog post-list--archive post-list__wrapper">

				<?php if ( is_home() && ! is_front_page() ) : ?>
				<header class="archive-header">
					<h1 class="archive-title"><?php single_post_title(); ?></h1>
				</header>
				<?php endif; ?>

				<div class="post-list__feed post-list__feed--blog post-list__feed--grid-thirds">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'list-tout' );

					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
				</div>

				<?php the_posts_navigation(); ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
