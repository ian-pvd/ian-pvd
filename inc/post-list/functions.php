<?php
/**
 * ian.pvd Post List
 *
 * Post List helper functions
 *
 * @package ianpvd
 */

function pvd_get_post_list_defaults() {
	$defaults = [
		'context' => 'recent-posts',
		'list_title' => 'Recent Posts',
		'list_format' => 'grid-thirds',
		'list_description' => NULL,
		'post_format' => 'tout',
		'query_vars' => [
			'posts_per_page' => 3,
			'post_category' => NULL,
			'zone' => NULL,
		],
		'read_more' => false,
		'read_more_text' => 'Read More',
	];

	return $defaults;
}
