<?php
/**
 * ian.pvd Feature Image
 *
 * Theme output tags
 *
 * @package ianpvd
 */

function pvd_the_post_header( $allowed_html = [] ) {

	// Parse allowed_html options with defaults
	if ( empty( $allowed_html ) ) {
		$allowed_html = wp_parse_args( $allowed_html, pvd_get_post_header_defaults() );
	}

	// Display the filtered post header
	echo wp_kses( pvd_get_the_post_header(), $allowed_html );
}
