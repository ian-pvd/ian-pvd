<?php
/**
 * ian.pvd Post Header
 *
 * Theme handler functions
 *
 * @package ianpvd
 */

function pvd_get_the_post_header() {
	$post_header = get_post_meta( get_the_ID(), 'post-header', true );

	return $post_header;
}

// Post Header Allowed HTML Defaults
function pvd_get_post_header_defaults() {
	$defaults = [
		'a' => [
			'href' => true,
			'rel' => true,
			'name' => true,
			'target' => true,
			'class' => true,
			'id' => true,
			'title' => true,
			'role' => true,
		],
		'em' => [],
		'strong' => [],
	];

	return $defaults;

}
