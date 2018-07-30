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
	add_image_size( 'portfolio', 512, 288, [ 'center', 'top' ] );
}
add_action( 'after_setup_theme', 'pvd_image_sizes' );
