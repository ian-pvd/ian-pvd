<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package ianpvd
 */

if ( ! function_exists( 'ianpvd_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function ianpvd_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		/* translators: %s: post date. */
		esc_html_x( 'Posted on %s', 'post date', 'ianpvd' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		/* translators: %s: post author. */
		esc_html_x( 'by %s', 'post author', 'ianpvd' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'ianpvd_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function ianpvd_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'ianpvd' ) );
		if ( $categories_list && ianpvd_categorized_blog() ) {
			/* translators: 1: list of categories. */
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'ianpvd' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'ianpvd' ) );
		if ( $tags_list ) {
			/* translators: 1: list of tags. */
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'ianpvd' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link(
			sprintf(
				wp_kses(
					/* translators: %s: post title */
					__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'ianpvd' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Edit <span class="screen-reader-text">%s</span>', 'ianpvd' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function ianpvd_categorized_blog() {
	$all_the_cool_cats = get_transient( 'ianpvd_categories' );
	if ( false === $all_the_cool_cats ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'ianpvd_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 || is_preview() ) {
		// This blog has more than 1 category so ianpvd_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so ianpvd_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in ianpvd_categorized_blog.
 */
function ianpvd_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'ianpvd_categories' );
}
add_action( 'edit_category', 'ianpvd_category_transient_flusher' );
add_action( 'save_post',     'ianpvd_category_transient_flusher' );

/**
 * Checks for site logo and prints home link for the header.
 */
function ianpvd_site_title() {

	$wrapper = 'div';
	$class_attr = 'site-title';
	$site_title = get_bloginfo( 'name' );

	if ( is_front_page() && is_home() ) {
		$wrapper = 'h1';
	}

	printf( '<%1$s class="%2$s"><a href="%3$s" rel="home">%4$s</a></%1$s>',
		$wrapper,
		$class_attr,
		esc_url( home_url( '/' ) ),
		$site_title
	);
}

/**
 * Returns a single post category
 */
function pvd_the_post_category( $args = [] ) {
	// NOTE - This function returns only the first category result
	// TODO - Add primary category to posts
	// TODO - Return primary cagegory
	$post_category = get_the_category();

	$defaults = [ 'links' => false, 'empty_text' => 'N/A' ];
	$args = wp_parse_args( $args, $defaults );

	if ( is_array( $post_category ) && ! empty( $post_category ) ) {
		$post_category = $post_category[0];

		if ( true == $args['links'] ) {
			echo '<a href="' . esc_url( get_category_link( $post_category->term_id ) ) . '" title="' . $post_category->name . '">' . $post_category->name . '</a>';
		} else {
			echo $post_category->name;
		}
	} else {
		echo '<span>' . esc_html_e( get_post_type() ) . '</span>';
	}
}
