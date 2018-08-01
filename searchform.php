<?php
/**
 * Template for displaying search forms
 *
 * @package ianpvd
 */

$unique_id = esc_attr( uniqid( 'search-form-' ) );

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>" class="search-label">
		<span class="screen-reader-text"><?php echo __( 'Search for:', 'ianpvd' ); ?></span>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>" class="search-input" placeholder="<?php echo esc_attr( 'Search&hellip;', 'ianpvd' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo __( 'Search', 'ianpvd' ); ?></span></button>
</form>
