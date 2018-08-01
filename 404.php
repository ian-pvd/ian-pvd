<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ianpvd
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<div class="page-header__content">
						<h1 class="page-title"><?php esc_html_e( '404: Not Found', 'ianpvd' ); ?></h1>
					</div>
				</header><!-- .page-header -->

				<div class="page-content wp-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ianpvd' ); ?></p>

					<?php
						get_search_form();
					?>
				</div><!-- .page-content -->

				<footer class="content-area__footer">

					<?php
						pvd_post_list( [
							'query_vars' => [
								'posts_per_page' => 3,
							],
						] );
					?>

				</footer><!-- .content-recirc -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
