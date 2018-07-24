<?php
/**
 * Display a post list
 *
 */

function pvd_post_list( $context = 'recent-posts', $list_title = 'Recent Posts', $args = [] ) {
	// Default post list args
	$defaults = [
		'list_format' => 'grid-thirds',
		'list_description' => NULL,
		'post_format' => 'tout',
		'list_query' => [
			'post_count' => 3,
			'post_category' => NULL,
			'zone' => NULL,
		],
	];

	// Parse user args with defaults
	$args = wp_parse_args( $args, $defaults );

	// Set up template vars
	$post_format = 'post-list__item--' . $args['post_format'];
	$list_format = 'post-list__feed--' . $args['list_format'];

	// Get the post list
	if ( isset( $args['list_query']['zone'] ) ) {
		// If zone is requested, return zone posts
		// @TODO
	} else {
		// Query posts using list args
		$the_query = new WP_Query ( $args['list_query'] );
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

	<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<?php // get_template_part( 'template-parts/content', 'list-tout' ); ?>

			<article class="post-list__item <?php esc_attr_e( $post_format ); ?>">
				<figure class="post-list__item-thumbnail post-thumbnail">
					<div class="post-thumbnail__frame">
						<img src="https://breath35.files.wordpress.com/2012/05/201377_199046263449473_156329461054487_602947_7963888_o.jpg" alt="">
					</div>
				</figure>
				<h1 class="post-list__item-title">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</h1>
				<div class="post-list__item-excerpt">
					<p>Donec sed odio dui. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Curabitur blandit tempus porttitor.</p>
				</div>
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
