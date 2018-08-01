<?php
/**
 * Additional features to allow styling of the templates
 *
 * @package ianpvd
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ianpvd_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'ianpvd_body_classes' );

/**
 * Removes taxonomy type prefix from `the_archive_title()`
 *
 */
add_filter( 'get_the_archive_title', function( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false);
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	}

	return $title;
} );
