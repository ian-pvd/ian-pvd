<?php
/**
 * ian.pvd Feature Image
 *
 * Theme output tags
 *
 * @package ianpvd
 */

/**
 * Displays the post thumbnail description
 * @param  int|WP_Post	$post	optional	Post ID or WP_Post object.
 */
function pvd_the_post_thumbnail_description( $post = null ) {
	echo apply_filters( 'pvd_the_post_thumbnail_description', pvd_get_the_post_thumbnail_description( $post ) );
}

