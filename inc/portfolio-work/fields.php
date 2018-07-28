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
			// Screenshot - Featured Image for page, different than thumbnail
			'screenshot' => new Fieldmanager_Media( [
				'label' => 'Project screenshot',
				'button_label' => __( 'Attach a screenshot', 'pvdind' ),
				'mime_type' => 'image',
				'preview_size' => 'medium',
			] ),
			'info' => new Fieldmanager_Group( [
				'label' => __( 'Project Info' ),
				'children' => [
					// Project Date
					'date' => new Fieldmanager_Datepicker( [
						'label' => __( 'Project Date', 'ianpvd' ),
					] ),
					// Client - Client name
					'clients' => new Fieldmanager_Group( [
						'children' => [
							'client_name' => new Fieldmanager_TextField( [
								'label' => __( 'Client', 'ianpvd' ),
							] ),
							'client_link' => new Fieldmanager_Link( [
								'label' => __( 'Client Link', 'ianpvd' ),
							] ),
						],
						'add_more_label' => __( 'Add another client', 'ianpvd' ),
						'extra_elements' => 1,
						'limit' => 5,
					] ),
				],
			] ),
			'details' =>  new Fieldmanager_Group( [
				'label' => __( 'Project details', 'ianpvd' ),
				'children' => [
					// Work type – Option
					'type' => new Fieldmanager_Select( [
						'label' => __( 'Type' , 'ianpvd' ),
						'first_empty' => true,
						'options' => [
							'website' => __( 'Website', 'ianpvd' ),
							'codepen' => __( 'CodePen', 'ianpvd' ),
							'repo' => __( 'GitHub Repo', 'ianpvd' ),
						],
						'description' => __( 'Project type will display in portfolio post lists.', 'ianpvd' ),
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
						'description' => __( 'Project platform will display on project detail pages.', 'ianpvd' ),
					] ),
				],
			] ),
			'links' => new Fieldmanager_Group( [
				'label' => 'Project Links',
				'children' => [
					// External Permalink - Link directly to project
					'external_permalink' => new Fieldmanager_Checkbox( [
						'label' => __( 'Link directly to project', 'ianpvd' ),
						'description' => __( 'Project permalinks will bypass the Work single post template and open the project in a new window.', 'ianpvd' ),
					] ),
					// Project Link - Primary project link
					'primary_link' => new Fieldmanager_Link( [
						'label' => __( 'Primary Link', 'ianpvd' ),
					] ),
					// Example Link(s) – Add one or more external links
					'example_links' => new Fieldmanager_Link( [
						'add_more_label' => __( 'Add another link', 'ianpvd' ),
						'extra_elements' => 1,
						'label' => __( 'Example Links', 'ianpvd' ),
						'limit' => 0,
					] ),
				],
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
