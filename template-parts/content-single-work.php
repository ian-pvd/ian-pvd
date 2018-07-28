<?php
/**
 * Template part for displaying work posts
 *
 * @package ianpvd
 */

// Get Work CPT fields meta
$work = get_post_meta( get_the_ID(), 'work_item', true );

// Prefer screenshot, else default to post thumbnail
$work_screenshot = false;
if ( $work['screenshot'] ) {
	$work_screenshot = wp_get_attachment_image( $work['screenshot'], 'full' );
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="post-header">

		<?php if ( $work_screenshot ) : ?>
		<div class="post-header__screenshot work-screenshot">
			<div class="work-screenshot__frame">
				<?php echo $work_screenshot; ?>
			</div>
		</div>
		<?php endif; ?>

		<div class="post-header__content post-header__content--work">
			<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>

			<?php
				// Featured Image, only if no screenshot
				if ( ! $work_screenshot && has_post_thumbnail() ) {
					get_template_part( 'template-parts/featured-image' );
				}
			?>

			<div class="post-header__meta post-meta post-meta--work">
				<div class="post-meta__item post-meta__item--client">
					<span class="post-meta__label">Client</span>
					<?php pvd_work_client_list( $work ); ?>
				</div>
				<div class="post-meta__item post-meta__item--platform">
					<span class="post-meta__label">Platform</span>
					<span class="post-meta__value">
						<?php pvd_work_platform(); ?>
					</span>
				</div>
				<div class="post-meta__item post-meta__item--date">
					<span class="post-meta__label">Project Date</span>
					<span class="post-meta__value">
						<?php pvd_work_project_date(); ?>
					</span>
				</div>
				<div class="post-meta__item post-meta__item--keywords">
					<span class="post-meta__label">Technology</span>
					<?php pvd_work_technology_list(); ?>
				</div>
			</div>

			<?php if ( pvd_get_the_post_header() ) : ?>
			<div class="post-header__intro wp-content">
				<?php pvd_the_post_header(); ?>
			</div>
			<?php endif; ?>
		</div>

	</header><!-- .post-header -->

	<div class="post-content wp-content">
		<?php the_content(); ?>
	</div><!-- .post-content -->

	<footer class="post-footer">

		<?php pvd_post_list(); ?>

	</footer><!-- .post-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
