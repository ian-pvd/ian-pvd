
<?php
/**
 * Display a post list
 *
 */

function pvd_post_list( $args = [] ) {

	// Parse user args with defaults
	$args = wp_parse_args( $args, pvd_get_post_list_defaults() );

	// Set up template vars
	$context = $args['context'];
	$list_title = $args['list_title'];
	$post_format = 'post-list__item--' . $args['post_format'];
	$list_format = 'post-list__feed--' . $args['list_format'];

	wp_reset_postdata();

	// Get the post list
	if ( isset( $args['list_query']['zone'] ) ) {
		// If zone is requested, return zone posts
		// @TODO
	} else {
		// Query posts using list args
		$post_list_query = new WP_Query ($args['list_query']);
	}
?>

<div class="post-list post-list--<?php esc_attr_e( $context ); ?> wrapper wrapper--page">

	<?php if ( $list_title ) : ?>
	<h2 class="post-list__header post-list__header--<?php esc_attr_e( $context ); ?>">
			<?php esc_html_e( $list_title ); ?>
	</h2>
	<?php endif; ?>

	<?php if ( $args['list_description'] ) : ?>
	<div class="post-list__description post-list__description--<?php esc_attr_e( $context ); ?>">
		<?php esc_html_e( $args['list_description'] ); ?>
	</div>
	<?php endif; ?>

	<div class="post-list__feed post-list__feed--<?php esc_attr_e( $context ); ?> <?php esc_attr_e( $list_format ) ?>">

	<?php if ( $post_list_query->have_posts() ) : ?>
		<?php while ( $post_list_query->have_posts() ) : $post_list_query->the_post(); ?>

			<?php // get_template_part( 'template-parts/content', 'list-tout' ); ?>

			<article class="post-list__item <?php esc_attr_e( $post_format ); ?>">

				<?php if ( has_post_thumbnail() ) : ?>
				<figure class="post-list__item-thumbnail post-thumbnail">
					<a href="<?php the_permalink(); ?>" class="post-thumbnail__frame">
						<?php the_post_thumbnail(); ?>
					</a>
				</figure>
				<?php endif; ?>

				<h2 class="post-list__item-title">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>

				<?php if ( pvd_get_the_post_header() ) : ?>
				<div class="post-list__item-excerpt">
					<?php pvd_the_post_header(); ?>
				</div>
				<?php endif; ?>
			</article>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php else : ?>
		No Results
	<?php endif; ?>

	</div>
</div>


<?php
}
