<?php
/**
 * Template part for displaying a featured image on a single post or page
 *
 * @package ianpvd
 */

?>

<figure class="featured-image">

	<div class="featured-image__frame">

		<?php
		if ( 'work' == get_post_type() ) {
			the_post_thumbnail( 'portfolio' );
		} else {
			the_post_thumbnail();
		}
		?>

		<?php if ( pvd_get_the_post_thumbnail_description() ): ?>
		<div class="featured-image__credit">
			<div class="featured-image__wrapper">
				<?php pvd_the_post_thumbnail_description(); ?>
			</div>
		</div>
		<?php endif; ?>

	</div>

	<?php if ( get_the_post_thumbnail_caption() ): ?>
	<figcaption class="featured-image__caption">
		<div class="featured-image__wrapper">
			<?php the_post_thumbnail_caption(); ?>
		</div>
	</figcaption>
	<?php endif; ?>

</figure>
