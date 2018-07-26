<?php
/**
 * ian.pvd Register Widget Areas
 *
 * Fieldmanager fields config
 *
 * @package ianpvd
 */


function pvd_widgets_init() {
	register_sidebar( [
		'name'          => esc_html__( 'Social Widgets', 'ianpvd' ),
		'id'            => 'social-widgets',
		'description'   => esc_html__( 'Social network widgets for page footers.', 'ianpvd' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget__title"><span>',
		'after_title'   => '</span></h3>',
	] );
}

add_action( 'widgets_init', 'pvd_widgets_init' );
