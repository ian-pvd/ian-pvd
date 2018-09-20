<?php
/**
 * Template part for displaying post list content in a tout layout
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ianpvd
 */
?>

<article class="post-list__item post-list__item--tout">

	<?php if ( has_post_thumbnail() ) : ?>
	<figure class="post-list__item-thumbnail post-thumbnail">
		<a href="<?php the_permalink(); ?>" class="post-thumbnail__frame">
			<?php the_post_thumbnail( 'tout-thumbnail' ); ?>
		</a>
	</figure>
	<?php endif; ?>

	<h2 class="post-list__item-title">
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>

	<?php if ( $post->post_excerpt ) : ?>
	<div class="post-list__item-excerpt wp-content">
		<?php echo apply_filters( 'the_excerpt', $post->post_excerpt ); ?>
	</div>
	<?php endif; ?>
</article>
