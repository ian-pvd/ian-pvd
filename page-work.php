<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ianpvd
 */
// Get Web Development term id for select dropdown
$category_id = get_term_by('slug', 'web-development', 'category');
$category_id = $category_id->term_id;

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page-work' );

		endwhile; // End of the loop.
		?>

		<?php if ( wp_count_posts()->publish >= 3 ) : ?>
		<section class="page-section page-section--blog">
			<?php
				pvd_post_list( [
					'list_format' => 'column',
					'post_format' => 'text',
					'query_vars' => [
						'posts_per_page' => 3,
						'cat' => $category_id,
					],
					'read_more' => get_category_link( $category_id ),
				] );
			?>
		</section>
		<?php endif; ?>

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
