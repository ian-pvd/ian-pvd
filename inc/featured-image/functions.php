<?php
/**
 * ian.pvd Feature Image
 *
 * Theme handler functions
 *
 * @package ianpvd
 */

function pvd_get_featured_image_format() {
	$featured_image_format = get_post_meta( get_the_ID(), 'featured_image_format', true );
	return $featured_image_format;
}

function pvd_get_featured_image_options() {
	$featured_image_options = [
		'image_layouts' => true, // This theme supports image layouts (v2 - array to filter supported layouts)
		'image_alignment' => true, // This theme supports image alignment
		'image_effects' => true, // This theme supports image effects (v2 - array to filter supported effects)
		'show_empty' => true, // This theme has fallback/watermark styles for empty featured image frames.
		'show_captions' => true // Do not show media library image captions for featured images.
	];
	return $featured_image_options;
}

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

/**
 * Displays the post thumbnail description
 * @param  int|WP_Post	$post	optional	Post ID or WP_Post object.
 */
function pvd_the_post_thumbnail_description( $post = null ) {
	echo apply_filters( 'pvd_the_post_thumbnail_description', pvd_get_the_post_thumbnail_description( $post ) );
}
