<?php
/**
 * The sidebar containing the social widgets
 *
 * @package ianpvd
 */

if ( ! is_active_sidebar( 'social-widgets' ) ) {
	return;
}
?>

<aside class="widget-area widget-area--social widget-area__wrapper" role="complementary">
	<?php dynamic_sidebar( 'social-widgets' ); ?>
</aside>
