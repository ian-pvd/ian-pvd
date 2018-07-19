<?php
/**
 * ian.pvd Feature Image
 *
 * Theme handler functions
 *
 * @package ianpvd
 */

/**
 * Returns the post thumbnail description
 * @param  int|WP_Post	$post	optional	Post ID or WP_Post object.
 * @return  string	Post thumbnail description.
 */
function pvd_get_the_post_thumbnail_description( $post = null ) {
	$post_thumbnail_id = get_post_thumbnail_id( $post );

	if ( ! $post_thumbnail_id ) {
		return '';
	}

	$attachment_metadata = get_post( $post_thumbnail_id );

	$description = $attachment_metadata->post_content;

	return $description;
}
