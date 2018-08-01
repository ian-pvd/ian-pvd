<?php
/**
 * Manage static assets.
 *
 * @package ianpvd
 */

/**
 * Enqueues scripts and styles for the frontend
 *
 * @return void
 */
function ianpvd_enqueue_assets() {
	// Dev-specific scripts.
	if ( false !== strpos( get_site_url(), '.dev' ) &&
		true == get_query_var( 'webpack-dev', false ) ) {
		wp_enqueue_script(
			'dev',
			'http://localhost:8080/static/js/dev.bundle.js',
			array(),
			false,
			false
		);
	} else {
		wp_enqueue_script( 'ianpvd-common-js', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'common-js' ), array(), '1.0' );
		wp_enqueue_script( 'ianpvd-site-js', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'site-js' ), array( 'ianpvd-common-js' ), '1.0' );
		wp_enqueue_style( 'ianpvd-site-css', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'site-css' ), array(), '1.0' );
		wp_enqueue_script( 'ianpvd-article-js', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'article-js' ), array( 'ianpvd-common-js' ), '1.0' );
		wp_enqueue_style( 'ianpvd-article-css', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'article-css' ), array(), '1.0' );

		if ( is_admin() ) {
			wp_enqueue_script( 'ianpvd-admin-js', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'admin-js' ), array( 'ianpvd-common-js' ), '1.0' );
			wp_enqueue_style( 'ianpvd-admin-css', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'admin-css' ), array(), '1.0' );
		}

		if ( is_front_page() ) {
			wp_enqueue_script( 'ianpvd-home-js', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'home-js' ), array( 'ianpvd-common-js' ), '1.0' );
			wp_enqueue_style( 'ianpvd-home-css', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'home-css' ), array(), '1.0' );
		}

		if ( is_archive() || is_home() || is_search() ) {
			wp_enqueue_script( 'ianpvd-archive-js', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'archive-js' ), array( 'ianpvd-common-js' ), '1.0' );
			wp_enqueue_style( 'ianpvd-archive-css', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'archive-css' ), array(), '1.0' );
		}

		if ( is_page() ) {
			wp_enqueue_script( 'ianpvd-page-js', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'page-js' ), array( 'ianpvd-common-js' ), '1.0' );
			wp_enqueue_style( 'ianpvd-page-css', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'page-css' ), array(), '1.0' );
		}

		if ( 'work' == get_post_type() ) {
			wp_enqueue_script( 'ianpvd-work-js', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'work-js' ), array( 'ianpvd-common-js' ), '1.0' );
			wp_enqueue_style( 'ianpvd-work-css', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'work-css' ), array(), '1.0' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'ianpvd_enqueue_assets' );

/**
 * Enqueues scripts and styles for admin screens
 *
 * @return void
 */
function ianpvd_enqueue_admin() {
	wp_enqueue_style( 'ianpvd-admin-css', get_template_directory_uri() . '/static/' . ianpvd_get_versioned_asset( 'admin-css' ), array(), '1.0' );
}
add_action( 'admin_enqueue_scripts', 'ianpvd_enqueue_admin' );

/**
 * Removes scripts that could potentially cause style conflicts
 *
 * @return void
 */
function ianpvd_dequeue_scripts() {
	wp_dequeue_style( 'jetpack-slideshow' );
	wp_dequeue_style( 'jetpack-carousel' );
}
add_action( 'wp_print_scripts', 'ianpvd_dequeue_scripts' );
