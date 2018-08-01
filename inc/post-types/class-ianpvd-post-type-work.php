<?php
/**
 * Portfolio Work Custom Post Type
 *
 * @package ianpvd
 */

class IANPVD_Custom_Post_Type_Work {

	/**
	 * Create the post type
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'create_post_type' ) );
	}

	/**
	 * Define Work post type
	 */
	public function create_post_type() {
		$labels = [
			'name'               => __( 'Portfolio', 'ianpvd' ),
			'singular_name'      => __( 'Portfolio Item', 'ianpvd' ),
			'add_new'            => __( 'Add New Portfolio Item', 'ianpvd' ),
			'add_new_item'       => __( 'Add Work Item', 'ianpvd' ),
			'all_items'          => __( 'All Portfolio Items', 'ianpvd' ),
			'edit_item'          => __( 'Edit Portfolio Item', 'ianpvd' ),
			'new_item'           => __( 'New Portfolio Item', 'ianpvd' ),
			'view_item'          => __( 'View Portfolio Item', 'ianpvd' ),
			'search_items'       => __( 'Search Portfolio', 'ianpvd' ),
			'not_found'          => __( 'No portfolio items found', 'ianpvd' ),
			'not_found_in_trash' => __( 'No portfolio items found in trash', 'ianpvd' ),
			'menu_name'          => __( 'Work', 'ianpvd' ),
		];

		$args = [
			'labels' => $labels,
			'description' => __( 'Post type for adding work portfolio examples', 'ianpvd' ),
			'public' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => true,
			'show_in_menu' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 5,
			'menu_icon' => 'dashicons-portfolio',
			'rewrite' => [
				'slug' => 'portfolio',
				'with_front' => false,
			],
			'has_archive' => 'portfolio',
			'taxonomies' => [ 'post_tag' ],
			'supports' => [ 'title', 'editor', 'thumbnail', 'revisions' ],
		];

		register_post_type( 'work', $args );
	}
}

$custom_post_type_work = new IANPVD_Custom_Post_Type_Work();
