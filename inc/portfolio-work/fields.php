<?php
/**
 * ian.pvd Portfolio Work
 *
 * Fieldmanager fields config
 *
 * @package ianpvd
 */

function pvd_fm_group_work_item() {

	// Get Web Development term id for select dropdown
	$term_web_development = get_term_by('slug', 'web-development', 'category');

	$fm = new Fieldmanager_Group( [
		'name' => 'work_item',
		'children' => [
			// Client - Client name
			'client' => new Fieldmanager_TextField( [
				'add_more_label' => __( 'Add another client', 'ianpvd' ),
				'extra_elements' => 1,
				'label' => __( 'Client', 'ianpvd' ),
				'limit' => 0,
			] ),
			// Work type – Option
			'type' => new Fieldmanager_Select( [
				'label' => __( 'Type' , 'ianpvd' ),
				'first_empty' => true,
				'options' => [
					'website' => __( 'Website', 'ianpvd' ),
					'codepen' => __( 'CodePen', 'ianpvd' ),
					'repo' => __( 'GitHub Repo', 'ianpvd' ),
				],
			] ),
			// Platform – Single tag
			'platform' => new Fieldmanager_Select( [
				'label' => __( 'Platform' , 'ianpvd' ),
				'first_empty' => true,
				'datasource' => new Fieldmanager_Datasource_Term( [
					'taxonomy' => 'category',
					'taxonomy_args' => [
						'child_of' => $term_web_development->term_id,
					],
				] ),
			] ),
			// External Permalink - Link directly to project
			'external_permalink' => new Fieldmanager_Checkbox( [
				'label' => __( 'Link directly to project', 'ianpvd' ),
			] ),
			// Link(s) – Add one or more external links
			'link' => new Fieldmanager_Link( [
				'add_more_label' => __( 'Add another link', 'ianpvd' ),
				'extra_elements' => 1,
				'label' => __( 'Link', 'ianpvd' ),
				'limit' => 0,
			] ),
			// Project Date
			'date' => new Fieldmanager_Datepicker( [
				'label' => __( 'Project Date', 'ianpvd' ),
			] ),
		],
	] );

	$fm->add_meta_box(
		__( 'Portfolio Work Info', 'ianpvd' ),
		[ 'work' ],
		'normal',
		'core'
	);
}

add_action( 'fm_post_work', 'pvd_fm_group_work_item' );
