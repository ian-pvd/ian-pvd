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
	add_image_size( 'tout', 1600, 900, true ); // 16:9
	add_image_size( 'tout-thumbnail', 512, 288, true ); // 16:9
	add_image_size( 'portfolio', 768, 512, [ 'center', 'top' ] ); // 3:2
	add_image_size( 'portfolio-thumbnail', 512, 341, [ 'center', 'top' ] ); // 3:2
}
add_action( 'after_setup_theme', 'pvd_image_sizes' );

/**
 * Unwrap paragraph tags on images in WP Content
 */
function pvd_unwrap_img_content($content) {
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'pvd_unwrap_img_content');
