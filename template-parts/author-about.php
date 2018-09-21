<?php
/**
 * Template part for displaying author bios
 *
 * @package ianpvd
 */

?>

<div class="author">
	<div class="author__image">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 512 ); ?>
	</div>

	<div class="author__about">
		<h3 class="author__name"><?php the_author_meta( 'display_name' ) ?></h3>
		<div class="author__description wp-content">
			<?php the_author_meta( 'description' ); ?>
		</div>
	</div>
</div>
