<?php
/**
 * Config Media.
 *
 * @package ianpvd
 */

/**
 * Add Image Sizes
 */
function pvd_image_sizes() {
	add_image_size( 'tout', 640, 360, true );
	add_image_size( 'portfolio', 512, 288, [ 'center', 'top' ] );
}
add_action( 'after_setup_theme', 'pvd_image_sizes' );

/**
 * Unwrap paragraph tags on images in WP Content
 */
function pvd_unwrap_img_content($content) {
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'pvd_unwrap_img_content');
