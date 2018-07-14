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
