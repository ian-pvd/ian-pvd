<?php
/**
 * ian.pvd Portfolio Work
 *
 * Theme output tags
 *
 * @package ianpvd
 */

/**
 * Outputs an html list of clients for a Work post
 */
function pvd_work_client_list( $work = false ) {
	// If no work data provided, get post meta.
	if ( ! $work ) {
		$work = get_post_meta( get_the_ID(), 'work_item', true );
	}

	// Fallback array if no clients returned.
	$client_array = [ [ 'client_name' => 'N/A' ] ];

	// If clients, overwrite default value.
	if ( ! empty( $work['info']['clients'] ) ) {
		$client_array = $work['info']['clients'];
	}

	// Start list markup
	echo '<ul class="post-meta__list">';

	// Loop through client array to output list.
	foreach ($client_array as $item => $client) {
		if ( isset( $client['client_link'] ) ) {
			$client = '<a href="' . esc_url( $client['client_link'] ) . '">' . $client['client_name'] . '</a>';
		} else {
			$client = esc_html( $client['client_name'] );
		}
		echo '<li class="post-meta__list-item">' . $client . '</li>';
	}

	// Close list markup
	echo '</ul>';
}

/**
 * Prints the project platform.
 */
function pvd_work_platform( $work = false ) {
	// If no work data provided, get post meta.
	if ( ! $work ) {
		$work = get_post_meta( get_the_ID(), 'work_item', true );
	}

	// Output what we've got.
	if ( ! empty( $work['details']['platform'] ) ) {
		$category = get_term( $work['details']['platform'] );
		echo '<a href="' . esc_url( get_term_link($category->term_id ) ) . '">' . $category->name . '</a>';
	} else {
		echo esc_html( 'N/A', 'ianpvd' );
	}
};

/**
 * Prints the project date.
 */
function pvd_work_project_date( $work = false ) {
	// If no work data provided, get post meta.
	if ( ! $work ) {
		$work = get_post_meta( get_the_ID(), 'work_item', true );
	}

	// Output what we've got.
	if ( ! empty( $work['info']['date'] ) ) {
		echo date( 'F Y', $work['info']['date'] );
	} else {
		echo esc_html( 'N/A', 'ianpvd' );
	}
};

/**
 * Outputs an html list of clients for a Work post
 */
function pvd_work_technology_list() {
	// Get Post Tags
	$post_tags = wp_get_post_tags( get_the_ID()) ;

	// Fallback object if no clients returned.
	$tech_array = [ (object) [ 'name' => 'N/A' ] ];

	// If clients, overwrite default value.
	if ( ! empty( $post_tags ) ) {
		$tech_array = $post_tags;
	}

	// Start list markup
	echo '<ul class="post-meta__list">';

	// Loop through client array to output list.
	foreach ($tech_array as $item => $technology ) {

		// Check if terms have WP_Object IDs set
		if ( isset( $technology->term_id ) ) {
			$technology = '<a href="' . esc_url( get_term_link($technology->term_id ) ) . '">' . $technology->name . '</a>';
		} else {
			// If no term_ID, likely the fallback term object
			$technology = esc_html( $technology->name );
		}

		// Add what we've got to the list:
		echo '<li class="post-meta__list-item">' . $technology . '</li>';
	}

	// Close list markup
	echo '</ul>';
}
