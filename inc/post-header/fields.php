<?php
/**
 * ian.pvd Post Header
 *
 * Fieldmanager fields config
 *
 * @package ianpvd
 */

function pvd_fm_group_post_header() {
	$fm = new Fieldmanager_RichTextArea( [
		'name' => 'post-header',
		'editor_settings' => array(
			'media_buttons' => false,
		),
	] );

	$fm->add_meta_box(
		__( 'Post Header', 'ianpvd' ),
		[ 'post', 'page' ],
		'normal',
		'core'
	);
}

add_action( 'fm_post_post', 'pvd_fm_group_post_header' );
add_action( 'fm_post_page', 'pvd_fm_group_post_header' );
