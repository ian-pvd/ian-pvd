<?php
/**
 * ian.pvd Post List
 *
 * Post list display functions
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
	$template_part = 'list-' . $args['post_format'];

	wp_reset_postdata();

	// Get the post list
	if ( isset( $args['query_vars']['zone'] ) ) {
		// If zone is requested, return zone posts
		// @TODO
	} else {
		// Query posts using list args
		$post_list_query = new WP_Query ( $args['query_vars'] );
	}
?>

	<div class="post-list post-list--<?php esc_attr_e( $context ); ?> post-list__wrapper">

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

				<?php get_template_part( 'template-parts/content', $template_part ); ?>

			<?php endwhile; ?>
		<?php else : ?>
			<div class="post-list__description post-list__description--no-posts">
				<?php esc_html_e( 'No posts found', 'ianpvd' ); ?>
			</div>
		<?php endif; ?>

		</div>

		<?php if ( $args['read_more'] && ( $post_list_query->found_posts > $post_list_query->post_count ) ) : ?>
			<?php // TODO - v2, if read_more = bool(true), and not a custom link, use the query results page link ?>
			<div class="post-list__read-more">
				<a href="<?php echo esc_url( $args['read_more'] ); ?>">
					<?php esc_html_e( $args['read_more_text'] ); ?>
				</a>
			</div>
		<?php endif; ?>
	</div>

<?php
}
