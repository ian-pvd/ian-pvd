<?php
/**
 * ian.pvd Feature Image
 *
 * Theme output tags
 *
 * @package ianpvd
 */

function pvd_the_post_header() {
	echo wp_kses_post( pvd_get_the_post_header() );
}
